<?php



class livre
{

    private $DSNbibliotec = 'mysql:host=localhost;dbname=bibliotec;charset=utf8';
    private $DSNbooks = 'mysql:host=localhost;dbname=books;charset=utf8';
    private $DBuser = 'root';
    private $DBpassword = '';

    function getBooksIDlist(){
        try{
            $pdo = new PDO($this->DSNbooks, $this->DBuser, $this->DBpassword);
        } catch (PDOException $e){
            exit('Erreur de connexion à la base de donnée'.$e);
        }
        $query = $pdo->prepare("SELECT id FROM livres");
        $query->execute();
        $idList = $query->fetchAll(PDO::FETCH_ASSOC);

        $list = [];
        foreach ($idList as $id){
            array_push($list, $id['id']);
        }

        return $list;
    }

    function getBooksList(){

        try{
            $pdo = new PDO($this->DSNbooks, $this->DBuser, $this->DBpassword);
        } catch (PDOException $e){
            exit('Erreur de connexion à la base de donnée'.$e);
        }

        $query = $pdo->prepare("SELECT * FROM livres");
        $query->execute();
        $livres = $query->fetchAll(PDO::FETCH_ASSOC);

        return $livres;
    }


    function getBookInfo($bookID){

        if (is_int($bookID)){

            try{
                $pdo = new PDO($this->DSNbooks, $this->DBuser, $this->DBpassword);
            } catch (PDOException $e){
                exit('Erreur de connexion à la base de donnée'.$e);
            }

            $query = $pdo->prepare("SELECT * FROM livres WHERE id = ?");
            $query->bindValue(1, $bookID);
            $query->execute();
            $livreData = $query->fetchAll(PDO::FETCH_ASSOC);


            $query2 = $pdo->prepare("
                SELECT livre_auteur.auteur_nom, livre_categories.categorie_nom, livre_editeur.editeur_nom, livre_lang.lang_nom
                FROM livre_auteur, livre_categories, livre_editeur, livre_lang
                WHERE livre_auteur.id = ? AND livre_categories.id = ? AND livre_editeur.id = ? AND livre_lang.id = ?;
            ");
            $query2->bindValue(1, $livreData[0]['id_auteur']);
            $query2->bindValue(2, $livreData[0]['id_categorie']);
            $query2->bindValue(3, $livreData[0]['id_editeur']);
            $query2->bindValue(4, $livreData[0]['id_lang']);
            $query2->execute();
            $livreInfos = $query2->fetchAll(PDO::FETCH_ASSOC);


            unset($livreData[0]['id_auteur']);
            unset($livreData[0]['id_editeur']);
            unset($livreData[0]['id_categorie']);
            unset($livreData[0]['id_lang']);

            $livreData[0]['auteur_nom'] = $livreInfos[0]['auteur_nom'];
            $livreData[0]['categorie_nom'] = $livreInfos[0]['categorie_nom'];
            $livreData[0]['editeur_nom'] = $livreInfos[0]['editeur_nom'];
            $livreData[0]['lang_nom'] = $livreInfos[0]['lang_nom'];

        } else{
            return 'ID incorrect';
        }
        return $livreData;
    }



}