<?php
class Car
{
    private $make_model;
    private $price;
    private $image;
    private $miles;

    function __construct($make_model, $price, $image, $miles = 20)
    {
        $this->make_model = $make_model;
        $this->price = $price;
        $this->image = $image;
        $this->miles = $miles;
    }

    function setPrice($new_price)
    {
        $float_price = (float) $new_price;
        if ($float_price != 0) {
            $formatted_price = number_format($float_price, 2);
            $this->price = $formatted_price;
        }
    }

    function setModel($new_model)
    {
        $str_model = strval($new_model);
        if ($str_model != 0) {
            $this->make_model = $str_model;
        }
    }

    function setMiles($new_miles)
    {
        $float_miles = (float) $new_miles;
        if ($float_miles != 0) {
            $formatted_miles = number_format($float_miles, 2);
            $this->miles = $formatted_miles;
        }
    }

    function getPrice()
    {
        return $this->price;
    }

    function getModel()
    {
        return $this->make_model;
    }

    function getMiles()
    {
        return $this->miles;
    }

    function getImage()
    {
        return $this->image;
    }
}


$porsche = new Car("2014 Porsche 911",
    100000,
    "https://files1.porsche.com/filestore/image/multimedia/none/jdp-2016-982-718-c7-modelimage-sideshot/model/
    d3b4f827-3356-11e8-bbc5-0019999cd470/porsche-model.png");

$ford = new Car("2011 Ford F450",
    55995,
    "https://images.autofusion.com/pricebooks_data/usa/colorized/2018/Ford/View2/Fiesta/SE/P4B_D2.png",
    14241);

$lexus = new Car("2013 Lexus RX 350",
    738383,
    "https://st.motortrend.com/uploads/sites/10/2015/11/2015-lexus-nx-f-sport-sport-
    utility-vehicle-angular-front.png",
    20000);

$lexus->setPrice("150000.54");
$lexus->setMiles(26382627);


$cars = array($porsche, $ford, $lexus);

$cars_matching_search = array();
foreach ($cars as $car) {
    $car_price = $car->getPrice();
    $car_miles = $car->getMiles();
    if ($car_price < $_GET["price"] && $car_miles < $_GET["mileage"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
<h1>Your Car Dealership</h1>
<ul>
    <?php
    if (empty($cars_matching_search)) {
        echo "There currently are no cars available that matches your criteria.";
    } else {
        foreach ($cars_matching_search as $car) {
            $car_price = $car->getPrice();
            $car_model = $car->getModel();
            $car_miles = $car->getMiles();
            $car_image = $car->getImage();
            echo "<li> $car_model </li>";
            echo "<ul>";
            echo "<li><img src='$car_image'></li>";
            echo "<li> $$car_price </li>";
            echo "<li> Miles: $car_miles </li>";
            echo "</ul>";
        }
    }
    ?>
</ul>
</body>
</html>