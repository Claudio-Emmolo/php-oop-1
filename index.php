<?php
require_once __DIR__ . './models/Movie.php';

//Create new object
$avatar = new Movie('https://news.cinecitta.com/photo.aspx?s=1&w=850&path=%2fpublic%2farticles%2f0091%2f91023%2favvy.jpeg', 'Avatar', '2009', '2h 42m', 'fantasy');
$licenzaDiUccidere = new Movie('#', 'Agente 007 - Licenza di uccidere', '1962 ', '1h 50m', 'Azione');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie's List</title>
</head>

<body>
    <main>
        <?php
        echo '<article>';
        echo  "<img src='{$avatar->defaultImgPath()}' alt=''>";
        echo '<h1>';
        echo  $avatar->title;
        echo '</h1>';
        echo '<p>';
        echo  "Anno: {$avatar->year} || Durata: {$avatar->duration} || Genere: {$avatar->genre}";
        echo '</p>';
        echo '</article>';

        echo '<article>';
        echo  "<img src='{$licenzaDiUccidere->defaultImgPath()}' alt=''>";
        echo '<h1>';
        echo  $licenzaDiUccidere->title;
        echo '</h1>';
        echo '<p>';
        echo  "Anno: {$licenzaDiUccidere->year} || Durata: {$licenzaDiUccidere->duration} || Genere: {$licenzaDiUccidere->genre}";
        echo '</p>';
        echo '</article>';
        ?>
    </main>
</body>

</html>