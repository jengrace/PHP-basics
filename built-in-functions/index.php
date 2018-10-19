<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built In Functions</title>
</head>
<body>
<div class="container">
    <h2>Hello! Please enter four different words below:</h2>

    <form action="string_output.php" method="get">
        <div class="form-group">
            <label for="word1">Word 1: </label>
            <input type="text" name="word1" class="form-control" id="word1">
        </div>
        <div class="form-group">
            <label for="word2">Word 2: </label>
            <input type="text" name="word2" class="form-control" id="word2">
        </div>
        <div class="form-group">
            <label for="word3">Word 3: </label>
            <input type="text" name="word3" class="form-control" id="word3">
        </div>
        <div class="form-group">
            <label for="word4">Word 4: </label>
            <input type="text" name="word4" class="form-control" id="word4">
        </div>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>