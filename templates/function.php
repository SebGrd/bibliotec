<?php

function get_header(){
    require_once $_SERVER['DOCUMENT_ROOT']."/templates/header.php";
}

function get_footer(){
    require_once $_SERVER['DOCUMENT_ROOT']."/templates/footer.php";
}

function get_sidebar(){
    require_once $_SERVER['DOCUMENT_ROOT']."/templates/sidebar.php";
}

function accountName($accountType){
    switch ($accountType){
        case 1:
            return 'Etudiant';
            break;
        case 2:
            return 'Libraire';
            break;
        case 3:
            return 'Gérant utilisateur';
            break;
        case 4:
            return 'Administrateur';
            break;
        default:
            return 'Non défini';
            break;
    }
}
