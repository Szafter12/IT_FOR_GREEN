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

echo "<pre>";
    print_r($_FILES['photos']);
    print_r($_FILES['files']);
echo "</pre>";

$articleId = $connect->insert_id;

echo $articleId;
echo "<pre>";
    print_r($_FILES['photos']);
echo "</pre>";

if(isset($_FILES['photos'])){
    $files_number = count($_FILES['photos']['name']);
    for($i=0; $i<$files_number; $i++){
        echo "<hr>Przesyłam ";
        echo $i+1;
        echo " plik<br>";

        echo "Typ pliku: ".$_FILES['photos']['type'][$i]."<br>";
        echo "Rozmiar pliku: ".$_FILES['photos']['size'][$i]."<br>";
        echo "Nazwa pliku: ".$_FILES['photos']['name'][$i]."<br>";
        echo "Nazwa tymczasowa: ".$_FILES['photos']['tmp_name'][$i]."<br>";
        echo "Błędy: ".$_FILES['photos']['error'][$i]."<br>";
        $file_name = $_FILES['photos']['name'][$i];

        $arg1 = array('ą', 'Ą', 'ć', 'Ć', 'ę', 'Ę', 'ł', 'Ł', 'ń', 'Ń', 'ó', 'Ó', 'ś', 'Ś', 'ź', 'Ź', 'ż', 'Ż', ' ' );
        $arg2 = array('a', 'a', 'c', 'c', 'e', 'e', 'l', 'l', 'n', 'n', 'o', 'o', 's', 's', 'z', 'z', 'z', 'z', '_' );
        $file_name = str_replace ( $arg1, $arg2, $file_name );
        $file_name = strtolower($file_name);
        $file_name = date("H-i-s").$file_name;
        


        $tmp_name = $_FILES['photos']['tmp_name'][$i];

       
        
        $target_dir = "../img/";
        $target_file = $target_dir.$file_name;
        //zdefiniowanie tablicy błędów wykonania skryptu
        $errors = array();
        //sprawdzenie rozszerzenia pliku
        $file_name_array =explode('.', $file_name);
        $file_ext = strtolower(end($file_name_array));
        $extensions = array("jpeg","jpg","jfif","jpe");
        if(in_array($file_ext, $extensions) === false){
            $errors[]="Błędne rozszerzenie, wybierz plik jpeg, jpg lub png.";
        }
        // sprawdzenie rozmiaru pliku
        if($_FILES['photos']['size'][$i] > 2000000000) {
            $errors[]="Plik jest za duży, max. rozmiar pliku wynosi 5MB.";
        }
        //sprawdzenie, czy plik już istnieje w danej lokalizacji
        if(file_exists($target_file)) {
            $errors[]="Taki plik już istnieje.";
        }


        //pobranie informacji o wymiarach pliku
        $info = getimagesize($tmp_name);
        $width = $info[0];
        $height = $info[1];
        echo<<<et
            Obraz jest {$info['bits']} bitowy, ma {$info['channels']} kanały
        et;
        //print_r($info);
        if($width>5000) {
            $errors[]="Plik ma za duże wymiary szerokość wynosi $width a powinna wynosić najwyżej 5000px.";
        }if($height>5000) {
            $errors[]="Plik ma za duże wymiary wysokość wynosi $height a powinna wynosić najwyżej 5000px.";
        }
        //wypisanie ewentualnych błędów
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        //wysłanie pliku na serwer
        if(!$errors)
        if (move_uploaded_file($tmp_name, $target_dir.$file_name)) {
            echo "Plik ".$file_name. " został wysłany na serwer.";
            $query = "INSERT INTO photos (article_id, path) VALUES ($articleId, '$file_name')";
            echo $query;
            $connect->query($query);
        } else {
            echo "Nie udało się wysłać pliku.";
        }
        $errors = array();
    }
}


