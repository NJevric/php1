<?php
    require_once("phpFunctionality/konekcija.php");
    $upitNavigacijaKorisnik = "SELECT idNav, href, tekst FROM navigacija WHERE NOT idNav = 5";
    $dohvatanjeNavigacijeKorisnik = $konekcija->query($upitNavigacijaKorisnik)->fetchAll();
    $upitNavigacijaAdmin  = "SELECT idNav, href, tekst FROM navigacija";
    $dohvatanjeNavigacijeAdmin = $konekcija->query($upitNavigacijaAdmin)->fetchAll();
?>
<header id="glavniProfili">
    <nav>
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-6 col-6 logo mt-2">
                    <a href="index.php"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="col-lg-6 col-6" id="navigacija">
                    <div id="hamburger">
                        <div class="ham hamProfil"></div>
                        <div class="ham hamProfil"></div>
                        <div class="ham hamProfil"></div>
                    </div>

                    <ul id="navigacijaLinkovi" class="navigacijaProfil">
                        
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
                    </ul>
                </div>  
            </div>
        </div>
    </nav>

</header>  