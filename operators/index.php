<?php
/*

-Expand on the example we did at the beginning of this lesson. We took two numbers from the user with a form and then
added them together with PHP to display the result.
To build your shipping calculator you will also need to get two
numbers from the user (weight and distance), do some math with them, and then display the answer.

-Divide the weight of the package and the shipping distance by 20 and then add them up to calculate the shipping cost.
Display the cost along with the weight of the package and the distance in the final PHP page.
Try using the . concatenation operator.

-This time, divide the distance by the weight and then add 5 to get the final shipping cost.

-Lastly, make up your own formula and use the subtraction operator in it somewhere.



$weight = $_GET['weight'] / 20;
$distance = $_GET['distance'] / 20;
$shippingCost = $weight + $distance

*/

?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping Calculator</title>
</head>
<body>
    <div class="container">
        <h2>Hello! Please enter the weight of your package and the distance it needs to travel below:</h2>
        <form action="shipping_costs2.php" method="get">
            <div class="form-group">
                <label for="weight">Enter package weight: </label>
                <input type="number" name="weight" class="form-control" id="weight">
            </div>

            <div class="form-group">
                <label for="distance">Enter distance: </label>
                <input type="number" name="distance" class="form-control" id="distance">
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
