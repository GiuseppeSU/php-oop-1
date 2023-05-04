<?php

require __DIR__ . '/Models/movie.php';
require __DIR__ . '/Models/Generi.php';

$indirizzoCinema = new Address("via Napoli 2", "Napoli", "32000");
$film = new movie('Fantozzi', 'Italiano', '2000', $indirizzoCinema);
$film2 = new movie('Star Wars', 'Inglese', '1998', new Address("via Roma 2", "Roma", "35000"));
$film->name = "Fantozzi";
$film->language = "italiano";
$film->date = 2000;

echo $film->getFullName();
echo $film->getFullAddress();
echo $film2->getFullName();
echo $film2->getFullAddress();