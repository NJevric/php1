<?php
    session_start();
    require_once("phpFunctionality/konekcija.php");
    $upitFotografije="SELECT f.idFoto, f.href, f.alt, a.idAutor, a.hrefProfilnaSlika, a.altProfilnaSlika FROM fotografije f INNER JOIN autori a ON f.idAutor=a.idAutor ORDER BY idFoto DESC";

    $upitZaPrikazFoto=$konekcija->query($upitFotografije)->fetchAll();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8"/>
        <title>Photos for everyone</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <?php  
        require_once("header.php");
    ?>
    <main>
        <div class="container my-5">
            <div class="row"> 
                
                <?php foreach($upitZaPrikazFoto as $i):?>
                    <div class="col-lg-4 post">
                        <img src="img/galerija/<?=$i['href'] ?>" class="img-fluid mb-4" alt=" <?=$i['alt']?>"/>
                       
                            <a href="profilAutora.php?id=<?= $i['idAutor'] ?>"><img src="img/<?=$i['hrefProfilnaSlika'] ?>" class="img-fluid autorSlike" alt=" <?=$i['altProfilnaSlika']?>"/></a>
                            <a href="#" class="download"><i class="fas fa-download"></i></a>
                           
                    
                        
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </main>
    <?php
        require_once("footer.php");
    ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    <script src="js/main.js"></script>
    </body>
</html>