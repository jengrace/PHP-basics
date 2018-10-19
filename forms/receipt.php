<?php
    $username = $_GET["username"];
    $address = $_GET["address"];
?>

<?php
/*
Create a website with a form on it to take the user's full name and address as if they were ordering a product from you.
After they submit the form you should show them a page as a receipt. Thank them for purchasing whatever it is you are
selling, and be sure to use their full name. Then reprint their address as a confirmation of shipping details.


$userName
$address
*/
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
