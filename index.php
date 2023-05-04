<?php

require __DIR__ . '/movie.php';
require __DIR__ . '/address.php';

$indirizzoCinema = new Address("via Napoli 2", "Napoli", "32000");
$fantozzi = new movie('Fantozzi', 'Italiano', '2000', $indirizzoCinema);
$fantozzi->name = "Fantozzi";
$fantozzi->language = "italiano";
$fantozzi->date = 2000;

echo $fantozzi->getFullName();