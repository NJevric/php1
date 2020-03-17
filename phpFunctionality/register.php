<?php
    session_start();
   if(isset($_POST["btnRegistruj"])){

    $ime=$_POST["ime"];
    $prezime=$_POST["prezime"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $lozinka=$_POST["lozinka"];
    $lozinkaPotvrdi=$_POST["lozinkaPotvrdi"];

    $greske=[];

    if(!preg_match("/^[A-Z][a-z]{2,24}$/", $ime)){
        $greske[]="Ime nije ok";
    }
    if(!preg_match("/^[A-Z][a-z]{2,24}$/", $prezime)){
        $greske[]="Prezime nije ok";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $greske[]="Email nije ok";
    }
    if(!preg_match("/^.{5,60}/", $username)){
        $greske[]="Username greska";
    }
    if(!preg_match("/^.{5,50}$/", $lozinka)){
        $greske[]="Lozinka nije ok";
    }
    if($lozinka!=$lozinkaPotvrdi){
        $greske[]="Lozinke nisu iste";
    }

    if(count($greske)){
        $_SESSION["greske"]=$greske;
        header("Location: ../join.php");
    }else{

        require("konekcija.php");

        $upit= "INSERT INTO users VALUES(NULL, :ime, :prezime, :email, :username, :pass, :datum, :uloga)";
        $priprema=$konekcija->prepare($upit);

        $pass=md5($lozinka);
        
        $priprema->bindParam(":ime", $ime);
        $priprema->bindParam(":prezime", $prezime);
        $priprema->bindParam(":email", $email);
        $priprema->bindParam(":username", $username);
        $priprema->bindParam(":pass", $pass);
        $datum =date("Y-m-d H:i:s");
        $priprema->bindParam(":datum",$datum);
        $uloga=1;
        $priprema->bindParam(":uloga",$uloga);
       
     
        try{
           $priprema->execute(); 
          
           header("Location: ../index.php");
        }catch(PDOException $e){
            // if($username=:user){
            //     $_SESSION["greske"]=["Vec postoji korisnik sa tim username-om!"];
            // }
            // if($email=:email){
            //     $_SESSION["greske"]=["Vec postoji korisnik sa tim email-om!"];
            // }
            
           
            header("Location: ../join.php");
           
        }
    }
}
?>