<?php
$string = file_get_contents('dischi.json');
$disk = json_decode($string, true);

if(isset($_POST['disk'])) {
  $album = [
    'title' => $_POST['diskTitle'],
    'author' => $_POST['diskAuthor'],
    'year' => $_POST['diskYear'],
    'poster' => $_POST['diskPoster'],
    'genre' => $_POST['diskGenre'],
  ];

  $disk[] = $album;

  file_put_contents('db.json', json_encode($disk));
}
  
header('Content-Type: application/json');
echo json_encode($disk);