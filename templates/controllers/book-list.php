<?php


try{
    $pdo = new PDO('mysql:host=localhost;dbname=bibliotec', 'root', '');
} catch (PDOException $e){
    exit('Erreur de connexion à la base de donnée');
}
$query = $pdo->prepare("SELECT * FROM livre"); //Requete SQL
$query->execute(); //Execute la requete
$requestResult = $query->fetchAll(PDO::FETCH_ASSOC); // Recupere le retour de la requete

$livres = [];
$booksApiUrl = 'https://www.googleapis.com/books/v1/volumes?q=isbn:';

foreach ($requestResult as $result){
    $api = file_get_contents($booksApiUrl.$result['isbn'].'&key=AIzaSyBKuexKL3NTZLt-PxeoVay7Hyo1F8DaJr8');
    $json = json_decode($api, true);
    array_push($livres, $json);
}

require_once $_SERVER['DOCUMENT_ROOT']."/templates/views/book-list.php";