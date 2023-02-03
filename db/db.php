<?php

//New object database
$filmList = [
    "avatar" => $avatar = new Movie('https://news.cinecitta.com/photo.aspx?s=1&w=850&path=%2fpublic%2farticles%2f0091%2f91023%2favvy.jpeg', 'Avatar', '2009', '2h 42m', new Genre(['Fantasy', 'Sci-Fi', 'Azione'])),
    "licenzaDiUccidere" => $licenzaDiUccidere = new Movie('#', 'Agente 007 - Licenza di uccidere', '1962 ', '1h 50m', new Genre(['Spionaggio', 'Azione', 'Avventura']))
];
