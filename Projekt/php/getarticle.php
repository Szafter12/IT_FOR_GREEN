<?php

//Folder główny

$DR = $_SERVER["DOCUMENT_ROOT"].'/IT_FOR_GREEN/Projekt';
$domena = "localhost/IT_FOR_GREEN/Projekt";
$connect=@new mysqli('localhost','root','','it_for_green');


$articleId = $_GET['artId'];
$query = "SELECT * FROM article WHERE article_id = $articleId";
$article = $connect->query($query);
$article = $article->fetch_object();

//Wypisanie elementow do zmiennych

$content = $article->content;
$author = $article->author;
$title = $article->title;

//Pobranie zdjęć

$query = "SELECT path FROM photos WHERE article_id = $articleId";
$result = $connect->query($query);
$zdjecia = array();
while($row = $result->fetch_object()){
    $zdjecia[] = "$domena/img/$row->path";
}
echo "<pre>";
    print_r($zdjecia);
    echo "<img src='$zdjecia[0]'>";
echo "</pre>";

