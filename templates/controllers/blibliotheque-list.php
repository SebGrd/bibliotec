<?php


try{
    $pdo = new PDO('mysql:host=localhost;dbname=bibliotec', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (PDOException $e){
    exit('Erreur de connexion à la base de donnée');
}
$query = $pdo->prepare("SELECT * FROM bibliotheque"); //Requete SQL
$query->execute(); //Execute la requete
$requestResult = $query->fetchAll(PDO::FETCH_ASSOC); // Recupere le retour de la requete

$bibliotheques = $requestResult;

//foreach ($requestResult as $result){
//    $api = file_get_contents($booksApiUrl.$result['isbn']);
//    $json = json_decode($api, true);
//    array_push($livres, $json);
//}

require_once $_SERVER['DOCUMENT_ROOT']."/templates/views/bibliotheque-list.php";