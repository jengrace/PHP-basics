<?php
    $weight = $_GET['weight'] / 20;
    $distance = $_GET['distance'] / 20;
    $shippingCost = $weight / $distance;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo "The total cost is $" . shippingCost . ". The weight of the package is " . $weight . " lbs and the 
        distance is " . $distance . " miles." ?>
    </p>
</body>
</html>



-This time, divide the distance by the weight and then add 5 to get the final shipping cost.

-Lastly, make up your own formula and use the subtraction operator in it somewhere.