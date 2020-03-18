<?php
    session_start();
    if(isset($_POST["btnLogin"])){

        $username=$_POST["usernameLog"];
        $lozinka=$_POST["passLog"];
    
        $greske=[];
    
        if(!preg_match("/^.{5,60}/", $username)){
            $greske[]="Username greska";
        }
        if(!preg_match("/^.{5,50}$/", $lozinka)){
            $greske[]="Lozinka nije ok";
        }
    
        if(count($greske)){
            $_SESSION["greskeLog"]=$greske;
            header("Location: ../login.php");
        }
        else{

            require("konekcija.php");

            $priprema = $konekcija->prepare("SELECT u.idUser, u.email, ul.imeUloge AS ulogaIme from users u inner join uloga ul on u.idUloga=ul.idUloga where username=:username and password=:pass");

            $priprema->bindParam(":username",$username);
            $pass = md5($lozinka);
            $priprema->bindParam(":pass", $pass);
            $priprema->execute();

            if($priprema->rowCount()==1){
                $korisnik=$priprema->fetch();
                $admin=$priprema->fetch();
                $autor=$priprema->fetch();

                if($korisnik['ulogaIme']=="Korisnik"){
                    $_SESSION['korisnik']=$korisnik;
                }
                if($korisnik['ulogaIme']=="Admin"){
                    $_SESSION['admin']=$admin;
                   
                }
                if($korisnik['ulogaIme']=="Autor"){
                    $_SESSION['autor']=$autor;
                    
                }
                header("Location: ../index.php");
            }else{
                $_SESSION["greskeLog"]=["Ne postoji takav korisnik"];
                header("location: ../login.php");
            }
        }
    }
    else{
        $_SESSION['greskeLog'] = $greske;
    }
?>