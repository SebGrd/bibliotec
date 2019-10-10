<?php
if (!isset($_SESSION)) {
    session_start();
}


if(isset($_SESSION['logged_in'])){

    print_r($_GET);

    $userToDel = $_GET['user'];

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=bibliotec;charset=utf8', 'root', '');
    } catch (PDOException $e){
        exit('Erreur de connexion à la base de donnée'.$e);
    }

    $query = $pdo->prepare("DELETE FROM utilisateur WHERE utilisateur.id_user = ?");
    $query->bindValue(1, $userToDel);
    $query->execute();


    header('Location: '.('http://'.$_SERVER['HTTP_HOST'].'/dashboard/'));



} else{ //n'est pas connecté / Force le formulaire (post)
    header('Location: '.('http://'.$_SERVER['HTTP_HOST']));
}

