<?php
    $soup_of_day = "Minestrone";
    $drink_of_day = "Sangria";
    $entree = "Lasagna";
    $dessert = "Tiramisu";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Specials Menu</title>
</head>
<body>
    <h1>Olive Garden's Specials Menu</h1>
    <p>Welcome! Please find our daily specials below:</p>
    <p>Soup of the day: <?php echo $soup_of_day; ?></p>
    <p>Drink of the day: <?php echo $drink_of_day; ?></p>
    <p>Entree: <?php echo $entree; ?></p>
    <p>Dessert: <?php echo $dessert; ?></p>
</body>
</html>

