<?php

require_once $_SERVER['DOCUMENT_ROOT']."/templates/class/livre.php";


if (!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['logged_in'])){

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=bibliotec;charset=utf8', 'root', '');
    } catch (PDOException $e){
        exit('Erreur de connexion à la base de donnée'.$e);
    }
    try{
        $pdo2 = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');
    } catch (PDOException $e){
        exit('Erreur de connexion à la base de donnée'.$e);
    }
    //LISTE USERS
    $query = $pdo->prepare("SELECT * FROM utilisateur"); //Requete SQL
    $query->execute(); //Execute la requete
    $users = $query->fetchAll(); // Recupere le retour de la requete
    //LISTE LIVRES
    $query = $pdo2->prepare("SELECT * FROM livres"); //Requete SQL
    $query->execute(); //Execute la requete
    $booksList = $query->fetchAll(PDO::FETCH_ASSOC); // Recupere le retour de la requete


    //STATS
    $query = $pdo->prepare("SELECT COUNT(*) FROM utilisateur"); //Requete SQL
    $query->execute(); //Execute la requete
    $nbrUsers = $query->fetchAll(); // Recupere le retour de la requete
    $query = $pdo2->prepare("SELECT COUNT(*) FROM livres"); //Requete SQL
    $query->execute(); //Execute la requete
    $nbrBooks = $query->fetchAll(); // Recupere le retour de la requete
    $query = $pdo2->prepare("SELECT COUNT(*) FROM livre_auteur"); //Requete SQL
    $query->execute(); //Execute la requete
    $nbrAuteur = $query->fetchAll(); // Recupere le retour de la requete

    //CATEGORIES
    $query = $pdo2->prepare("SELECT * FROM livre_categories");
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_ASSOC);
    //AUTEURS
    $query = $pdo2->prepare("SELECT * FROM livre_auteur");
    $query->execute();
    $auteurs = $query->fetchAll(PDO::FETCH_ASSOC);
    //EDITEUR
    $query = $pdo2->prepare("SELECT * FROM livre_editeur");
    $query->execute();
    $editeurs = $query->fetchAll(PDO::FETCH_ASSOC);
    //LANG
    $query = $pdo2->prepare("SELECT * FROM livre_lang");
    $query->execute();
    $langs = $query->fetchAll(PDO::FETCH_ASSOC);
    //BLIBLIOTEQUES
    $query = $pdo->prepare("SELECT id_biblio, nom_biblio FROM bibliotheque");
    $query->execute();
    $biblioteques = $query->fetchAll(PDO::FETCH_ASSOC);


    require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/views/dashboard/index.php";

} else{


//page de connection
    session_destroy();
    header('Location: /');

}