<?php
    $word1 = $_GET["word1"];
    $word2 = $_GET["word2"];
    $word3 = $_GET["word3"];
    $word4 = $_GET["word4"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built In Functions</title>
</head>
<body>
    <div>
        <p><?php echo strtoupper($word1)?></p>
        <p><?php echo str_word_count($word2)?></p>
        <p><?php echo str_shuffle($word3)?></p>
        <p><?php echo stripos($word4, "you")?></p>
    </div>
</body>
</html>
