<?php
class Parcel
{
    private $dimension_l;
    private $dimension_w;
    private $weight;

    function __construct($dimension_l, $dimension_w, $weight)
    {
        $this->dimension_l = $dimension_l;
        $this->dimension_w = $dimension_w;
        $this->weight = $weight;
    }

    // When you call a method called volume() on a Parcel instance, it should return the product of the sides.

    function getVolume()
    {
        return $this->dimension_l * $this->dimension_w;
    }

    function costToShip()
    {
        return ($this->dimension_l * $this->dimension_w) / ($this->weight) * 2;
    }

    function setDimensionL($new_dimension_l)
    {
        $float_dimension_l = (float) $new_dimension_l;
        if ($float_dimension_l != 0) {
            $formatted_dimension_l = number_format($float_dimension_l, 2);
            $this->dimension_l = $formatted_dimension_l;
        }
    }

    function setDimensionW ($new_dimension_w)
    {
        $float_dimension_w = (float) $new_dimension_w;
        if ($float_dimension_w != 0) {
            $formatted_dimension_w = number_format($float_dimension_w, 2);
            $this->dimension_w = $formatted_dimension_w;
        }
    }

    function setWeight($new_weight)
    {
        $float_weight = (float) $new_weight;
        if ($float_weight != 0) {
            $formatted_weight = number_format($float_weight, 2);
            $this->weight = $formatted_weight;
        }
    }

    function getDimensionL()
    {
        return $this->dimension_l;
    }

    function getDimensionW()
    {
        return $this->dimension_w;
    }

    function getWeight()
    {
        return $this->weight;
    }
}

if ($_GET["length"] == null || $_GET["width"] == null || $_GET["weight"]== null) {
    echo "Please fill ALL values";
    return;
} else {
    $parcel1 = new Parcel($_GET["length"], $_GET["width"], $_GET["weight"]);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Parcel Shipments</title>
</head>
<body>
<h1>Parcel Shipments</h1>
<?php
    $length = $parcel1->getDimensionL();
    $width = $parcel1->getDimensionW();
    echo "<h3>Parcel dimensions: " . $length . "l. x " . $width . "w.</h3>";
    echo "<h3>Parcel volume: " . $parcel1->getVolume() . "</h3>";
    echo "<h3>Cost to ship: $" . $parcel1->costToShip() . "</h3>";
?>
</body>
</html>
