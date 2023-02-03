<?php
require_once __DIR__ . './models/Movie.php';
require_once __DIR__ . './models/Genre.php';

$array = ['bla', 'bla', 'bla'];

//Create new object
$avatar = new Movie('https://news.cinecitta.com/photo.aspx?s=1&w=850&path=%2fpublic%2farticles%2f0091%2f91023%2favvy.jpeg', 'Avatar', '2009', '2h 42m', new Genre(['Fantasy', 'Sci-Fi', 'Azione']));
$licenzaDiUccidere = new Movie('#', 'Agente 007 - Licenza di uccidere', '1962 ', '1h 50m', new Genre(['Spionaggio', 'Azione', 'Avventura']));
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
        echo  "Anno: {$avatar->year} || Durata: {$avatar->duration}";
        echo '</p>';
        echo "Genere:";
        foreach ($avatar->genre as $key => $item) {
            echo '<ul>';
            echo '<li>';
            var_dump($item);
            echo '</li>';
            echo '</ul>';
        }
        echo '</article>';

        echo '<article>';
        echo  "<img src='{$licenzaDiUccidere->defaultImgPath()}' alt=''>";
        echo '<h1>';
        echo  $licenzaDiUccidere->title;
        echo '</h1>';
        echo '<p>';
        echo  "Anno: {$licenzaDiUccidere->year} || Durata: {$licenzaDiUccidere->duration}";
        echo '</p>';
        echo "Genere:";
        foreach ($licenzaDiUccidere->genre as $key => $item) {
            echo '<ul>';
            echo '<li>';
            var_dump($item);
            echo '</li>';
            echo '</ul>';
        }
        echo '</article>';
        ?>
    </main>
</body>

</html>