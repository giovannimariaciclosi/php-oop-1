<?php

require_once './Models/Movie.php';

//Creo dei film
$pulpFiction = new Movie("Pulp Fiction", "Crime", 154);
$the25thHour = new Movie("25th Hour", "Drama", 135);
$acidHouse = new Movie("The Acid House", "Drama", 59 );
$wolfOfWallStreet = new Movie("The Wolf of Wall Street", "Comedy", 89 );

//Li metto in un array
$movies[] = $pulpFiction;
$movies[] = $the25thHour;
$movies[] = $acidHouse;
$movies[] = $wolfOfWallStreet;
