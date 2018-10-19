<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Hello! Please enter your full name and mailing address below:</h2>

        <form action="receipt.php" method="get">
            <div class="form-group">
                <label for="username">Name: </label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="address">Address: </label>
                <input type="text" name="address" class="form-control" id="address">
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>