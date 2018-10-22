<?php

/*

function canEllaEat($food) {
    if ($food === "fish" && $food == "pineapples") {
        return "She can't eat anything with fish and pineapples!";
    } else {
        return "She can eat it!";
    }
}

*/

function canEllaEat($food) {
    /* This function searches in the whole string for 'fish' or 'pineapples' (i.e: 'Fish stew'). */
    if (strpos($food, 'fish') !== false || strpos($food, 'pineapples') !== false) {
        return "She can't eat anything with fish or pineapples!";
    } else {
        return "She can eat it!";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logical Operators</title>
</head>
<body>

    <div class="container">
        <h2>Hello! Please enter the a certain food that you have in mind for Ella below:</h2>

        <form action="index.php" method="get">
            <div class="form-group">
                <label for="food">Food: </label>
                <input type="text" name="food" class="form-control" id="food">
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <div>
            <?php
            if (isset($_GET["submit"])) {
                $food = $_GET["food"];
                ?>
            <h4><?php echo canEllaEat($food);
            ?></h4>
            <?php
            } ?>

        </div>
    </div>


</body>
</html>