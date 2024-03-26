<?php
$DR = $_SERVER["DOCUMENT_ROOT"].'/IT_FOR_GREEN/Projekt';
$domena = "localhost/IT_FOR_GREEN/Projekt";
$connect=@new mysqli('localhost','root','','it_for_green');

$query = "SELECT title, add_date, author, left(content, 50) AS beginning FROM article WHERE status = 'accepted' ORDER BY add_date";

$result = $connect->query($query);
$numberOfArticles = mysql_num_rows($result);

$titles = array();
$add_dates = array();
$authors = array();
$beginnings = array();

while ($row = $result->fetch_object()){
    $titles[] = $row->title;
    $add_dates[] = $row->add_date;
    $authors[] = $row->author;
    $beginnings[] = $row->beginning;
}

