<?php
/*

-Let's say you're in a band which has a catalog of 4 albums. Create a page in the browser to display each album with a
price next to it. Use an associative array with a foreach loop.

-Let's add to your band's imaginary homepage. You are going to be playing 6 shows. Create an associative array to store
the dates with the cities you will be playing in. Now use another foreach loop to display them in the browser underneath
the albums and songs currently for sale.

*/

$album_prices = array("Chaos Theory" => 5, "Apparatus" => 10, "Eye for an Eye" => 15, "Cat Napped" => 20);
$tour_dates = array("Florida" => "10/10/2018", "California" => "11/02/2018", "Arizona" => "11/10/2018",
                    "New Mexico" => "11/20/2018", "Louisiana" => "11/30/2018", "Texas" => "12/01/2018");
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
    <div class="container">
        <h1>The Collapsing Hats</h1>
        <h2>Albums</h2>
        <div>
            <ul>
                <?php
                foreach($album_prices as $album_name => $price) {
                    echo "<li>" . "$album_name: " . "$" . "$price" . "</li>";
                }

                ?>
            </ul>
        </div>

        <h2>Tour Dates</h2>
        <div>
            <ul>
                <?php
                foreach($tour_dates as $state => $date) {
                    echo "<li>" . "$state: $date" . "</li>";
                }

                ?>
            </ul>
        </div>

    </div>
</body>
</html>
