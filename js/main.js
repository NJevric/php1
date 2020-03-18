var url=location.href;
var urlBezIndex=location.pathname;
window.onload=function(){
    navigacija();
}
function navigacija(){
    $("#hamburger").click(function(){
        $("#navigacijaLinkovi").slideToggle();
       
       $(".ham").toggleClass("hamClick");
    });
    console.log("navigacija");
}
function provera(){
    let ime=document.getElementById("ime").value;
    let prezime=document.getElementById("prezime").value;
    let email=document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let lozinka=document.getElementById("lozinka").value;
    let lozinkaPotvrdi=document.getElementById("lozinkaPotvrdi").value;
    let greska=document.getElementsByClassName("greskaKontakt");
    
    let regExpIme=/^[A-Z][a-z]{2,19}$/;
    let regExpPrezime=/^[A-Z][a-z]{2,39}$/;
    let regExpEmail=/^\w+((\,|\-|\_)?\w+)*@\w{2,6}\.\w{2,3}$/;
    let regExpPass=/^.{5,50}$/;
    let regExpUsername=/^.{5,60}$/;
    let greske=[];

    if(!regExpIme.test(ime)){
        greska[0].innerHTML="First letter must be uppercase, max 25 characters *";
        greske.push(1);
    }
    if(!regExpPrezime.test(prezime)){
        greska[1].innerHTML="First letter must be uppercase, max 25 characters *";
        greske.push(2);
    }
    if(!regExpEmail.test(email)){
        greska[2].innerHTML="Invalid email address*";
        greske.push(3);
    }
    if(!regExpUsername.test(username)){
        greska[3].innerHTML="Username must have 5 charackters";
        greske.push(4);
    }
    if(!regExpPass.test(lozinka)){
        greska[4].innerHTML="Password must have 5 charackters*";
        greske.push(5);
    }
    if(lozinka!=lozinkaPotvrdi){
        greska[5].innerHTML="Passwords do not match *";
        greske.push(6);
    }


    if(greske.length){
        return false;
    }
    else{
       
        return true;
    }
}
// function proveraLog(){
// let email=document.getElementById("emailLog").value;
// let lozinka=document.getElementById("lozinkaLog").value;

// let regExpEmail=/^\w+((\,|\-|\_)?\w+)*@\w{2,6}\.\w{2,3}$/;
// let regExpPass=/^.{5,50}$/;

// let greske=[];

// if(!regExpEmail.test(email)){
//     greske.push("Email nije ok");
// }
// if(!regExpPass.test(lozinka)){
//     greske.push("Lozinka nije ok");
// }


// if(greske.length){
//     ispis="<ul>";
//     greske.forEach(greska => {
//         ispis+=`<li>${greska}</li>`;

//     });
//     ispis+="</ul>"
//     document.getElementById("greskeLogin").innerHTML=ispis;
//     return false;
// }else{
//     document.getElementById("greskeLogin").innerHTML="";
//     return true;
// }
// }


//     function provera(e){
//         e.preventDefalut();
//                 let ime=document.getElementById("ime").value;
//                 let prezime=document.getElementById("prezime").value;
//                 let email=document.getElementById("email").value;
//                 let lozinka=document.getElementById("lozinka").value;
//                 let lozinkaPotvrdi=document.getElementById("lozinkaPotvrdi").value;
    
//                 let regExpIme=/^[A-Z][a-z]{2,19}$/;
//                 let regExpPrezime=/^[A-Z][a-z]{2,39}$/;
//                 let regExpEmail=/^\w+((\,|\-|\_)?\w+)*@\w{2,6}\.\w{2,3}$/;
//                 let regExpPass=/^.{5,50}$/;
    
//                 let greske=[];
    
//                 if(!regExpIme.test(ime)){
//                     greske.push("Ime nije ok");
//                 }
//                 if(!regExpPrezime.test(prezime)){
//                     greske.push("Prezime nije ok");
//                 }
//                 if(!regExpEmail.test(email)){
//                     greske.push("Email nije ok");
//                 }
//                 if(!regExpPass.test(lozinka)){
//                     greske.push("Lozinka nije ok");
//                 }
//                 if(lozinka!=lozinkaPotvrdi){
//                     greske.push("Lozinke nisu iste");
//                 }
    
    
//                 if(greske.length){
//                     ispis="<ul>";
//                     greske.forEach(greska => {
//                         ispis+=`<li>${greska}</li>`;
    
//                     });
//                     ispis+="</ul>"
//                     document.getElementById("greskeRegistracija").innerHTML=ispis;
//                 }else{
//                     document.getElementById("greskeRegistracija").innerHTML="";
//                     let podaci={
//                         "ime":ime,
//                         "prezime":prezime,
//                         "email":email,
//                         "lozinka":lozinka,
//                         "lozinkaPotvrdi": lozinkaPotvrdi
//                     }
//                     let jsonString=JSON.stringify(podaci);
//                     let kanal=null;
//                     if(window.XMLHttpRequest){
//                         kanal=new XMLHttpRequest();
//                     }else{
//                         kanal=new ActiveXObject("Microsoft.XMLHTTP");
//                     }
//                     kanal.open("POST", "registracija.php", true);
//                     kanal.setRequestHeader("Content-Type", "application/json");
//                     kanal.send(jsonString);
//                 }
//         }
// function proveraLog(e){
//     e.preventDefalut();
//     let email=document.getElementById("emailLog").value;
//     let lozinka=document.getElementById("lozinkaLog").value;

//     let regExpEmail=/^\w+((\,|\-|\_)?\w+)*@\w{2,6}(\.\w{2,3})+$/;
//     let regExpPass=/^.{5,50}$/;

//     let greske=[];

//     if(!regExpEmail.test(email)){
//         greske.push("Email nije ok");
//     }
//     if(!regExpPass.test(lozinka)){
//         greske.push("Lozinka nije ok");
//     }


//     if(greske.length){
//         ispis="<ul>";
//         greske.forEach(greska => {
//             ispis+=`<li>${greska}</li>`;

//         });
//         ispis+="</ul>"
//         document.getElementById("greskeLogin").innerHTML=ispis;
//     }else{
//         document.getElementById("greskeLogin").innerHTML="";
//         document.getElementById("greskeRegistracija").innerHTML="";
//         let podaci={
//             "emailLog":email,
//             "lozinkaLog":lozinka
//         }
//         let jsonString=JSON.stringify(podaci);
//         let kanal=null;
//         if(window.XMLHttpRequest){
//             kanal=new XMLHttpRequest();
//         }else{
//             kanal=new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         kanal.open("POST", "registracija.php", true);
//         kanal.setRequestHeader("Content-Type", "application/json");
//         kanal.send(jsonString);
//     }
// }