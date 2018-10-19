<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Making Functions</title>
</head>
<body>
<div class="container">
    <h2>Hello! Please enter three phrases below:</h2>

    <form action="encrypted_string.php" method="get">
        <div class="form-group">
            <label for="phrase1">Phrase 1: </label>
            <input type="text" name="phrase1" class="form-control" id="phrase1">
        </div>
        <div class="form-group">
            <label for="phrase2">Phrase 2: </label>
            <input type="text" name="phrase2" class="form-control" id="phrase2">
        </div>
        <div class="form-group">
            <label for="phrase3">Phrase 3: </label>
            <input type="text" name="phrase3" class="form-control" id="phrase3">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>
