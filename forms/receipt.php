<?php
    $username = $_GET["username"];
    $address = $_GET["address"];
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
    <h2>Thank you <?php echo $username ?>!</h2>
    <p>
        Hello <?php echo $username ?>, thank you for your order. Your product will be mailed to <?php echo $address ?>.
        Have a great day!
    </p>
</body>
</html>
