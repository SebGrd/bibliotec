<?php
if (!isset($_SESSION)) {
    session_start();
}


if (isset($_SESSION['logged_in'])) {

    var_dump($_POST);

    $title = ($_POST['livre_title'] == 'NULL') ? null : $_POST['livre_title'];
    $pages = empty($_POST['nbr_pages']) ? null : $_POST['nbr_pages'];
    $datePubli = empty($_POST['livre_date-publi']) ? null : date("Y/m/j", strtotime($_POST['livre_date-publi']));
    $resume = empty($_POST['livre_resume']) ? null : $_POST['livre_resume'];
    $categorie = ($_POST['livre_categorie'] == 'NULL') ? null : $_POST['livre_categorie'];
    $image = empty($_POST['livre_image']) ? 'https://i.imgur.com/8Jvoa5P.png' : $_POST['livre_image'];
    $biblio = ($_POST['livre_biblioteque'] == 'NULL') ? null : $_POST['livre_biblioteque'];
    $isbn = empty($_POST['livre_isbn']) ? null : $_POST['livre_isbn'];
    $auteur = ($_POST['livre_auteur'] == 'NULL') ? null : $_POST['livre_auteur'];
    $editeur = ($_POST['livre_editeur'] == 'NULL') ? null : $_POST['livre_editeur'];
    $lang = ($_POST['livre_lang'] == 'NULL') ? null : $_POST['livre_lang'];

    try {
        $pdo2 = new PDO('mysql:host=localhost;dbname=books;charset=utf8', 'root', '');
    } catch (PDOException $e) {
        exit('Erreur de connexion à la base de donnée' . $e);
    }

    $query = $pdo2->prepare("
                    INSERT INTO livres (titre, nbr_page, date_publi, resume, id_categorie, img_url, id_bibli, isbn, id_auteur, id_editeur, id_lang)
                    VALUES (?,?,?,?,?,?,?,?,?,?,?);");
    $query->bindValue(1, $title);
    $query->bindValue(2, $pages);
    $query->bindValue(3, $datePubli);
    $query->bindValue(4, $resume);
    $query->bindValue(5, $categorie);
    $query->bindValue(6, $image);
    $query->bindValue(7, $biblio);
    $query->bindValue(8, $isbn);
    $query->bindValue(9, $auteur);
    $query->bindValue(10, $editeur);
    $query->bindValue(11, $lang);
    $query->execute();

    var_dump($query->errorInfo());



} else { //n'est pas connecté / Force le formulaire (post)
    header('Location: ' . ('http://' . $_SERVER['HTTP_HOST']));
}

