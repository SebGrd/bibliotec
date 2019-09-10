<!doctype html>
<html lang="fr">
<head id="header">
    <title>Bibliotec</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/templates/css/style.css"); ?>">
</head>
<header id="header">

    <div class="marque">
        <a href="/">
            <img src="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/templates/img/logo.png"); ?>" alt="Logo">
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="#">Emprunter un livre</a></li>
            <li><a href="<?php echo ('http://'.$_SERVER['HTTP_HOST']."/book-list.php"); ?>">Tous nos livres</a></li>
            <li><a href="#">Nos bibliothèques</a></li>
        </ul>
    </nav>

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

</header>