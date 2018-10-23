<?php

class Triangle
{
    public $side1;
    public $side2;
    public $side3;

    function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }


    function getTriangleType()
    {
        if ($this->side1 + $this->side2 > $this->side3 && $this->side1 + $this->side3 > $this->side2 && $this->side2 +
            $this->side3 > $this->side1) {
            if ($this->side1 == $this->side2 && $this->side1 == $this->side3 && $this->side2 == $this->side3) {
                return "This is an equilateral triangle.";
            } else if ($this->side2 == $this->side3 || $this->side1 == $this->side3 || $this->side1 == $this->side2) {
                return "This is an isosceles triangle.";
            } else {
                return "This is a scalene triangle.";
            }
        } else {
            return "This is not a valid triangle according to the triangle inequality theorem.";
        }
    }
}

if ($_GET["side1"] == null || $_GET["side2"] == null || $_GET["side3"]== null) {
    echo "Please fill ALL values";
    return;
} else {
    $triangle = new Triangle($_GET["side1"], $_GET["side2"], $_GET["side3"]);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Triangles</title>
</head>
<body>
<h1>Triangles</h1>
<?php
    echo "<h3>" . $triangle->getTriangleType() . "</h3>";
?>
</body>
</html>