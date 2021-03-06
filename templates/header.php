<!doctype html>
<html lang="fr">
<head id="header">
    <title>Bibliotec</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link rel="stylesheet" href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/templates/css/style.css"); ?>">

    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>

</head>
<header id="header">
    <nav>
        <a class="marque" href="/">
                <img src="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/templates/img/logo-2.png"); ?>" alt="Logo">
        </a>
        <ul>
            <li><a class="waves-effect waves-light" href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/borrow-book.php"); ?>">Emprunter un livre</a></li>
            <li><a class="waves-effect waves-light" href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/book-list.php"); ?>">Tous nos livres</a></li>
            <li><a class="waves-effect waves-light" href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/bibliotheque-list.php"); ?>">Nos bibliothèques</a></li>
        </ul>

        <div class="connexion">
            <?php
            if (!isset($_SESSION)) {
                session_start();
            }

            if(isset($_SESSION['logged_in'])){
                ?>
                <a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/dashboard/"); ?>">Tableau de bord</a>
                <div class="drop">
                    <ul>
                        <li><a href="#">Mon profil</a></li>
                        <li><a href="../logout.php" class="logout">Déconnexion</a></li>
                    </ul>
                </div>
                <?php
            } else{
                ?>
                <a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/login.php"); ?>">Se connecter</a>
                <?php
            }

            ?>

        </div>
    </nav>
</header>