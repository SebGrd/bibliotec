<?php
if (!isset($_SESSION)) {
    session_start();
}


if(isset($_SESSION['logged_in'])){

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $naissance = $_POST['naissance'];
    $mail = $_POST['mail'];
    $password = $_POST['mdp'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $typeCompte = $_POST['compte'];

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=bibliotec', 'root', '');
    } catch (PDOException $e){
        exit('Erreur de connexion à la base de donnée'.$e);
    }

    $query = $pdo->prepare("SELECT * FROM utilisateur WHERE utilisateur.mail = ?");
    $query->bindValue(1, $mail);
    $query->execute();
    $checkMail = $query->fetch();

    if ($checkMail == false){ //EMAIL LIBRE

        $addUser = $pdo->prepare("INSERT INTO utilisateur (prenom, nom, dateNaissance, mail, password, adresse, ville, type_compte) VALUES (?,?,?,?,?,?,?,?)"); //Requete SQL
        $addUser->bindValue(1, $prenom);
        $addUser->bindValue(2, $nom);
        $addUser->bindValue(3, $naissance);
        $addUser->bindValue(4, $mail);
        $addUser->bindValue(5, $hashed_password);
        $addUser->bindValue(6, $adresse);
        $addUser->bindValue(7, $ville);
        $addUser->bindValue(8, $typeCompte);
        $addUser->execute(); //Execute la requete

        header('Location: '.('http://'.$_SERVER['HTTP_HOST'].'/dashboard/'));

    } else{ //EMAIL UTILISE

        echo ('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">');
        echo '<div class="center-align"><h1>EMAIL DEJA UTILISEE</h1><a href="http://'.$_SERVER['HTTP_HOST'].'/dashboard/" class="waves-effect waves-light btn">Revenir au tableau de bord</a></div>';

    }




} else{ //n'est pas connecté / Force le formulaire (post)
    header('Location: '.('http://'.$_SERVER['HTTP_HOST']));
}

