<?php

$DR = $_SERVER["DOCUMENT_ROOT"].'/IT_FOR_GREEN/Projekt';
$domena = "localhost/IT_FOR_GREEN/Projekt";
$connect=@new mysqli('localhost','root','','it_for_green');

echo "<pre>";
    print_r($_POST);
echo "</pre>";

$content = $_POST['content'];
$author = $_POST['author'];
$title = $_POST['title'];



$query = "INSERT INTO article (content, author, title, status) VALUES ('$content', '$author','$title', 'in_progres')";
$connect->query($query);
