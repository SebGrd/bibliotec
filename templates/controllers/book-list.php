<?php


try{
    $pdo = new PDO('mysql:host=localhost;dbname=bibliotec;charset=utf8', 'root', '');
} catch (PDOException $e){
    exit('Erreur de connexion à la base de donnée'.$e);
}
$query = $pdo->prepare("SELECT * FROM livre"); //Requete SQL
$query->execute(); //Execute la requete
$requestResult = $query->fetchAll(PDO::FETCH_ASSOC); // Recupere le retour de la requete

$livres = [];
$booksApiUrl = 'https://www.googleapis.com/books/v1/volumes?q=isbn:';

foreach ($requestResult as $result){
    $api = file_get_contents($booksApiUrl.$result['isbn']);
    $json = json_decode($api, true);
    array_push($livres, $json);
}

require_once $_SERVER['DOCUMENT_ROOT']."/templates/views/book-list.php";