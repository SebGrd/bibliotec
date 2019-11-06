<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/class/livre.php";

//$id = intval($_GET['book']);
//$livre = new livre();
//$book = $livre->getBookInfo($id)[0];


try{
    $pdo = new PDO('mysql:host=localhost;dbname=bibliotec;charset=utf8', 'root', '');
} catch (PDOException $e){
    exit('Erreur de connexion à la base de donnée'.$e);
}

//$query = $pdo->prepare("SELECT * FROM bibliotheque WHERE id_biblio = ?");
//$query->bindValue(1, $book['id_bibli']);
//$query->execute();
//$biblio = $query->fetchAll(PDO::FETCH_ASSOC)[0];



require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/views/borrow-book.php";
