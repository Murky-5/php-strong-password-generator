<?php require_once "functions.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
        }

        h1 {
            font-size: 50px;
            font-weight: bold;
            font-style: italic;
            font-family: sans-serif;
            color: rgb(255, 208, 0);
            background-color: rgba(34, 33, 33, 0.78);
            border-radius: 50px;
            padding: 30px;
        }
    </style>
</head>
<body>
    <h1><?php echo $_SESSION["cookie"] ?></h1>
</body>
</html>
