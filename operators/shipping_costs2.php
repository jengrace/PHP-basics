<?php
    $weight = $_GET['weight'];
    $distance = $_GET['distance'];
    $weightDistanceQuotient = $weight / $distance;
    $finalShippingCost = $weightDistanceQuotient + 5

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
        <?php echo "The total cost is $" . $finalShippingCost . ". The weight of the package is " . $weight . " lbs and the 
        distance is " . $distance . " miles." ?>
    </p>
</body>
</html>