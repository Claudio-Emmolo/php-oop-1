<?php
//New object database
$filmList = [
    $avatar = new Movie('https://news.cinecitta.com/photo.aspx?s=1&w=850&path=%2fpublic%2farticles%2f0091%2f91023%2favvy.jpeg', 'Avatar', '2009', '2h 42m', new Genre(['Fantasy', 'Sci-Fi', 'Azione'])),
    $licenzaDiUccidere = new Movie('#', 'Agente 007 - Licenza di uccidere', '1962 ', '1h 50m', new Genre(['Spionaggio', 'Azione', 'Avventura'])),
    $laVitaBella = new Movie('https://static.fanpage.it/wp-content/uploads/sites/17/2019/12/maxresdefault1-1200x675.jpg', 'La vita è bella', '1997', '2h 2m', new Genre(['Guerra', 'Drammatico'])),
    $nuovoCinemaParadiso = new Movie('https://i.ytimg.com/vi/stLekU5BnbI/maxresdefault.jpg', 'Nuovo Cinema Paradiso', '1988 ', '2h 53m', new Genre(['Drammatico'])),
    $aceVenturaAcchiappanimali = new Movie('#', 'Ace Ventura - L\'acchiappanimali', '1994', '1h 26m', new Genre(['Commedia', 'Mystery '])),
];
