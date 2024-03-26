<?php
$DR = $_SERVER["DOCUMENT_ROOT"].'/IT_FOR_GREEN/Projekt';
$domena = "localhost/IT_FOR_GREEN/Projekt";
$connect=@new mysqli('localhost','root','','it_for_green');

$query = "SELECT article_id, title, add_date, author, left(content, 50) AS beginning FROM article WHERE status = 'accepted' ORDER BY add_date";

$result = $connect->query($query);
$numberOfArticles = $result->num_rows;

$titles = array();
$add_dates = array();
$authors = array();
$beginnings = array();
$photos = array();
$articseIds = array();




while ($row = $result->fetch_object()){
    $titles[] = $row->title;
    $add_dates[] = $row->add_date;
    $authors[] = $row->author;
    $beginnings[] = $row->beginning;
    $articseIds[] = $row->article_id;
    $query = "SELECT path FROM photos WHERE article_id = $row->article_id LIMIT 1";
    $photoPath = "http://$domena/img/".$connect->query($query)->fetch_object()->path;
    $photos[]= $photoPath;
}

