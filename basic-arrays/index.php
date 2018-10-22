<?php

    $favorite_ice_creams = array('chocolate', 'vanilla', 'neapolitan', 'butter pecan', 'nutella');

    $worst_movies = array('Disaster Movie', 'Jack and Jill', 'Glitter', 'Movie 43', 'The Last Airbender');
    array_push($worst_movies, 'Cabin Fever', 'The Emoji Movie');

    $favorite_books = array('The Hunger Games', 'Harry Potter', 'Lord of the Rings', 'The Handmaid\'s Tale',
                            'Morning Jay', 'A Storm of Swords', 'Gone Girl', 'The Giving Tree');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Arrays</title>
</head>
<body>
    <div>
        <ul>
            <li>Current second favorite ice cream flavor: <?php echo $favorite_ice_creams[1] ?></li>
            <br>
            <?php
            array_splice($favorite_ice_creams, 1, 1);
            for ($i = 0; $i < count($favorite_ice_creams); $i++) {
                ?>
                <li>Favorite ice cream <?php echo $i + 1 ?>: <?php echo $favorite_ice_creams[$i]; ?></li>
            <?php } ?>
            <br>
            <?php
            for ($i = 0; $i < count($worst_movies); $i++) {
            ?>
            <li>Worst movie <?php echo $i + 1 ?>: <?php echo $worst_movies[$i]; ?></li>
            <?php } ?>
            <br>
            <?php
                for ($i = 0; $i < count($favorite_books); $i++) {
                    if (($i+1) % 2 == 0) { ?>
                        <li>Favorite book <?php echo $i + 1 ?>: <?php echo $favorite_books[$i]; ?></li>
                    <?php } ?>
                <?php } ?>
        </ul>
    </div>
</body>
</html>