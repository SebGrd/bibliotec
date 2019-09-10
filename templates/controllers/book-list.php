<?php


try{
    $pdo = new PDO('mysql:host=localhost;dbname=biblioteque', 'root', '');
} catch (PDOException $e){
    exit('Erreur de connexion à la base de donnée');
}
$query = $pdo->prepare("SELECT * FROM livres"); //Requete SQL
$query->execute(); //Execute la requete
$requestResult = $query->fetch(); // Recupere le retour de la requete

require_once $_SERVER['DOCUMENT_ROOT']."/templates/views/book-list.php";