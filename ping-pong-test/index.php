<?php

function pingPong($num) {
    $num_arr = array();
    //echo var_dump(range(0, $num));
    foreach (range(0, $num) as $number) {
        if ($number == 0) {
            array_push($num_arr, 0);
        } else if ($number % 3 == 0 && $number % 5 == 0) {
            array_push($num_arr, 'ping-pong');
        } else if ($number % 3 == 0)  {
            array_push($num_arr, 'ping');
        } else if ($number % 5 == 0) {
            array_push($num_arr, 'pong');
        } else {
            array_push($num_arr, $number);
        }
    }
    return $num_arr;
}

$result = pingPong(18);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ping Pong Test</title>
</head>
<body>
<div>
    <ul>
        <?php foreach($result as $item) { ?>
            <li><?php echo $item ?></li>
        <?php }?>
    </ul>
</div>
</body>
</html>


