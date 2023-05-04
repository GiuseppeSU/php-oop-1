<?php

require __DIR__ . '/Models/movie.php';
require __DIR__ . '/Models/Generi.php';

$indirizzi = [
    new Generi("Comico", "Satira", "Italiano"),
    new Generi("Fantascienza", "Fantasy", "English"),

];

$indirizzoCinema = new Generi("via Napoli 2", "Napoli", "32000");
$film = new movie('Fantozzi', 'Italiano', '2000', $indirizzi);
$film2 = new movie('Star Wars', 'Inglese', '1998', $indirizzi);
$film->name = "Fantozzi";
$film->language = "italiano";
$film->date = 2000;

echo $film->getFullName();
echo $film->getFullAddress();
echo $film2->getFullName();
echo $film2->getFullAddress();