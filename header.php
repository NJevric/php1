<?php
    require_once("phpFunctionality/konekcija.php");
    $upitNavigacijaKorisnik = "SELECT idNav, href, tekst FROM navigacija WHERE  idNav NOT IN (11,14)";
    $dohvatanjeNavigacijeKorisnik = $konekcija->query($upitNavigacijaKorisnik)->fetchAll();

    $upitNavigacijaAdmin  = "SELECT idNav, href, tekst FROM navigacija WHERE NOT idNav=11";
    $dohvatanjeNavigacijeAdmin = $konekcija->query($upitNavigacijaAdmin)->fetchAll();

    $upitNavigacijaAutor = "SELECT idNav, href, tekst FROM navigacija WHERE NOT idNav=14";
    $dohvatanjeNavigacijeAutor = $konekcija->query($upitNavigacijaAutor)->fetchAll();

?>
<header id="glavni">
    <nav>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-6 col-6 logo mt-2">
                    <a href="index.php"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="col-lg-6 col-6" id="navigacija">
                    <div id="hamburger">
                        <div class="ham"></div>
                        <div class="ham"></div>
                        <div class="ham"></div>
                    </div>

                    <ul id="navigacijaLinkovi">
                        
                        <?php 
                            if(isset($_SESSION['korisnik'])) { 
                        ?>
                            <?php foreach($dohvatanjeNavigacijeKorisnik as $i):?>
                                <li><a href="<?=$i['href']?>"><?=$i['tekst']?><a></li>
                               
                            <?php endforeach;?>
                        <?php
                            }
                        ?>

                         <?php 
                            if(isset($_SESSION['admin'])) { 
                        ?>
                            <?php foreach($dohvatanjeNavigacijeAdmin as $i):?>
                                <li><a href="<?=$i['href']?>"><?=$i['tekst']?><a></li>
                            <?php endforeach;?>
                        <?php
                            }
                        ?>

                         <?php 
                            if(isset($_SESSION['autor'])) { 
                        ?>
                            <?php foreach($dohvatanjeNavigacijeAutor as $i):?>
                                <li><a href="<?=$i['href']?>"><?=$i['tekst']?><a></li>
                            <?php endforeach;?>
                           
                        <?php
                            }
                        ?>
                    </ul>
                </div>  
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 naslov text-center">
                <h1 class="mt-5 ">Hello World</h1>
                <p>The internet’s source of freely usable images.
                    Powered by creators everywhere.</p>
            </div>
        </div>
    </div>
</header>  