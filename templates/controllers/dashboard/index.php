<?php

if (!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['logged_in'])){

    require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/views/dashboard/index.php";

} else{


//page de connection
    session_destroy();
    header('Location: /');

}