<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>

<form action="xsspractice.php" method="$_GET">
    <input type="text" name="name" value="<?php if (!empty($_GET["name"])) {echo $_GET["name"];} ?>" />>

</form>
    
</body>
</html>