<?php
require_once __DIR__ . './models/Movie.php';
require_once __DIR__ . './models/Genre.php';

include_once __DIR__ . '/./db/db.php';
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
        foreach ($filmList as $film) {
            echo '<article>';
            echo  "<img src='{$film->defaultImgPath()}' alt=''>";
            echo '<h1>';
            echo  $film->title;
            echo '</h1>';
            echo '<p>';
            echo  "Anno: {$film->year} || Durata: {$film->duration}";
            echo '</p>';
            echo "Genere:";
            foreach ($film->genre->genre as $item) {
                echo '<ul>';
                echo '<li>';
                echo ($item);
                echo '</li>';
                echo '</ul>';
            }
            echo '</article>';
            echo "<hr>";
        }

        ?>
    </main>

</body>

</html>