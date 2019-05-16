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
