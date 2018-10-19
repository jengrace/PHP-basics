<?php
    $phrase1 = $_GET['phrase1'];
    $phrase2 = $_GET['phrase2'];
    $phrase3 = $_GET['phrase3'];
    $encrypted_string = encode($phrase1, $phrase2, $phrase3);

    function encode($phrase1, $phrase2, $phrase3) {
        $reversePhrase1 = strrev($phrase1);
        $capitalizePhrase2 = strtoupper($phrase2);
        $capitalizeReversePhrase3 = strrev(strtoupper($phrase3));
        return $reversePhrase1 . $capitalizePhrase2 . $capitalizeReversePhrase3;
    }
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
    <div>
        <ul>
            <li><?php echo $phrase1 ?></li>
            <li><?php echo $phrase2 ?></li>
            <li><?php echo $phrase3 ?></li>
            <li><?php echo $encrypted_string ?></li>
        </ul>
    </div>
</body>
</html>