<?php
if (!isset($_SESSION)) {
    session_start();
}


if(isset($_SESSION['logged_in'])){

    print_r($_GET);

    $idUser = $_GET['idUser'];
    $idBook = $_GET['idBook'];
    $dateRetour = $_GET['retour'];
    $today = date('Y-m-d', time());


    try{
        $pdo = new PDO('mysql:host=localhost;dbname=bibliotec;charset=utf8', 'root', '');
    } catch (PDOException $e){
        exit('Erreur de connexion à la base de donnée'.$e);
    }

    $query = $pdo->prepare("INSERT INTO emprunt (id_user_fk,id_livre_fk,dateDebut,dateRetour) VALUES (?,?,?,?)");
    $query->bindValue(1, $idUser);
    $query->bindValue(2, $idBook);
    $query->bindValue(3, $today);
    $query->bindValue(4, $dateRetour); 
    $query->execute();
    print_r($query->errorInfo());


//    header('Location: '.('http://'.$_SERVER['HTTP_HOST'].'/single-book.php?book='.$idBook));



} else{ //n'est pas connecté / Force le formulaire (post)
    header('Location: '.('http://'.$_SERVER['HTTP_HOST']));
}

