<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ .'/Models/Genre.php';
require_once __DIR__ .'/Models/Movie.php';
require_once __DIR__ .'/Models/TVSerie.php';




// $films = [
//     new Production('Back to the future', 'eng', 9, new Genre('Fantasy')),
//     new Production('La vita è bella', 'ita', 10, new Genre('Commedia')),
//     new Production('Avatar', 'eng', 7, new Genre('Fantasy')),
//     new Production('I Am Legend', 'eng', 6, new Genre('Azione')),
//     new Production('The Avengers', 'Eng',7, new Genre('Fantasy')),
//     new Production('Nuovo cinema Paradiso','ita',10, new Genre('Commedia')),
// // ];

$movies = [
    new Movie('Back to the future', 'eng', 9, 'Fantasy', 1985, 123),
    new Movie('La vita è bella', 'ita', 10, 'Commedia',2002, 101),
    new Movie('Avatar', 'eng', 7, 'Fantasy', 2010, 145),
    new Movie('I Am Legend', 'eng', 6, 'Azione', 2001, 95),
    new Movie('The Avengers', 'Eng',7, 'Fantasy', 2010, 135),
    new Movie('Boris - il film','ita',10, 'Commedia', 2011, 108),

];

$TVSeries = [
    new TVSerie('The Big Bang Theory', 'eng', 9, 'Commedia', 2005, 9),
    new TVSerie('How meet your mother', 'eng', 8, 'Commedia', 2002, 15),
    new TVSerie('La casa de papel', 'spa', 7, 'Commedia', 2022, 4),
    new TVSerie('Boris', 'ita', 10, 'Commedia', 2007, 4),
];










