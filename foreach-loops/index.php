<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach Loops</title>
</head>
<body>

    <div class="container">
        <h2>
            Hello! Please enter up to 5 numbers representing the prices of 5 items that you purchased
            from this store below:
        </h2>

        <form action="index.php" method="get">
            <div class="form-group">
                <label for="price_1">Price of purchase 1: </label>
                <input type="number" name="price_1" class="form-control" id="price_1">
            </div>

            <div class="form-group">
                <label for="price_2">Price of purchase 2: </label>
                <input type="number" name="price_2" class="form-control" id="price_2">
            </div>

            <div class="form-group">
                <label for="price_3">Price of purchase 3: </label>
                <input type="number" name="price_3" class="form-control" id="price_3">
            </div>

            <div class="form-group">
                <label for="price_4">Price of purchase 4: </label>
                <input type="number" name="price_4" class="form-control" id="price_4">
            </div>

            <div class="form-group">
                <label for="price_5">Price of purchase 5: </label>
                <input type="number" name="price_5" class="form-control" id="price_5">
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <div class="col-md-8">
        <?php
        if (isset($_GET["submit"])) {
            $prices = array();
            $price_1 = $_GET["price_1"] ?: 0;
            $price_2 = $_GET["price_2"] ?: 0;
            $price_3 = $_GET["price_3"] ?: 0;
            $price_4 = $_GET["price_4"] ?: 0;
            $price_5 = $_GET["price_5"] ?: 0;
            array_push($prices, $price_1, $price_2, $price_3, $price_4, $price_5);

            $total_cost = 0;
            foreach($prices as $price) {
                $total_cost += $price;
            }?>
        <br>
        <h4>
            Your total cost for all 5 purchases is: $<?php echo $total_cost ?>
        </h4>
        <?php } ?>
    </div>

</body>
</html>