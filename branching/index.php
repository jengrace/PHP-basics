<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Branching</title>
</head>
<body>

    <div class="container">
        <h2>Hello! Please enter the current temperature (in fahrenheit) below:</h2>

        <form action="index.php" method="get">
            <div class="form-group">
                <label for="current_temp">Current temperature: </label>
                <input type="number" name="current_temp" class="form-control" id="current_temp">
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <div class="col-md-8">
        <?php
            if (isset($_GET["submit"])) {
                $current_temp = $_GET["current_temp"];
                if ($current_temp < 60) {
                    echo "It's cold out!";
                } else if ($current_temp > 80) {
                    echo "It's too hot!";
                } else {
                    echo "It's lovely out!";
                }
            }
        ?>
    </div>

</body>
</html>
