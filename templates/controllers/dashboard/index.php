<?php

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
    $query = $pdo->prepare("SELECT * FROM utilisateur"); //Requete SQL
    $query->execute(); //Execute la requete
    $users = $query->fetchAll(); // Recupere le retour de la requete

    $query = $pdo->prepare("SELECT COUNT(*) FROM utilisateur"); //Requete SQL
    $query->execute(); //Execute la requete
    $nbrUsers = $query->fetchAll(); // Recupere le retour de la requete
    $query = $pdo2->prepare("SELECT COUNT(*) FROM livres"); //Requete SQL
    $query->execute(); //Execute la requete
    $nbrBooks = $query->fetchAll(); // Recupere le retour de la requete
    $query = $pdo2->prepare("SELECT COUNT(*) FROM livre_auteur"); //Requete SQL
    $query->execute(); //Execute la requete
    $nbrAuteur = $query->fetchAll(); // Recupere le retour de la requete


    require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/views/dashboard/index.php";

} else{


//page de connection
    session_destroy();
    header('Location: /');

}