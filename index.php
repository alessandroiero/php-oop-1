<?php
require_once __DIR__ . "/models/movies.php";

$movies = [
    new Movies("John Wick 4",2023,"Azione, Drammatico, Thriller"),
    new Movies("Il Cavaliere Oscuro",2008,"Azione, Drammatico, Thriller"),
    new Movies("Inception",2010,"Azione, Fantascienza, Thriller"),
];

var_dump($movies)
?>
