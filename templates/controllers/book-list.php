<?php

require_once $_SERVER['DOCUMENT_ROOT']."/templates/class/livre.php";

$livre = new livre();
$livres = $livre->getBooksList();
$livretest = $livre->getBookInfo(1);
$idList = $livre->getBooksIDlist();

require_once $_SERVER['DOCUMENT_ROOT']."/templates/views/book-list.php";
