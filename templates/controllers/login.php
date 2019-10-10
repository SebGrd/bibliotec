<?php

if (!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['logged_in'])){

    header('Location: '.('http://'.$_SERVER['HTTP_HOST']));

} else{

    if (isset($_POST['mail'], $_POST['password'])) {

        $mail = $_POST['mail'];
        $password = $_POST['password'];

        if (empty($mail) or empty($password)){

            $error = 'Tous les champs sont requis !';

        } else{

            try{
                $pdo = new PDO('mysql:host=localhost;dbname=bibliotec;charset=utf8', 'root', '');
//                $pdo = new PDO('mysql:host=localhost;dbname=bibliotec;charset=utf8', 'root', '');
            } catch (PDOException $e){
                exit('Erreur de connexion à la base de donnée'.$e);
            }
            $query = $pdo->prepare("SELECT password,type_compte FROM utilisateur WHERE mail = ?"); //Requete SQL
            $query->bindValue(1, $mail); //Ajoute le mail à la requete
            $query->execute(); //Execute la requete
            $result = $query->fetch(); // Recupere le retour de la requete

            if($result != FALSE){

                $pass = $result['password'];
                $accountType = $result['type_compte'];

                if (hash_equals($pass, crypt($password, $pass))){
                    //Variables de session
                    $_SESSION['logged_in'] = true;
                    $_SESSION['mail'] = $mail;
                    $_SESSION['account'] = $accountType;
                    //Redirection
                    header('Location: index.php');
                    exit();
                } else{
                    $error = 'Mauvais identifiants';
                }
            } else {
                $error = 'Mauvais identifiants';
            }




        }
    }

//page de connection
    session_destroy();
    require_once $_SERVER['DOCUMENT_ROOT']."/templates/views/login.php";

}