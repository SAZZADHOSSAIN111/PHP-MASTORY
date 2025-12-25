<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php 
   var_dump($_POST);
   var_dump($_GET);
?></pre>

<?php if (!empty($_POST["admin"])): ?>
    <h1><?php echo $_POST["admin"];?></h1>;
 <?php endif; ?>
 
 <?php if (!empty($_GET["admin"])): ?>
     <h1><?php echo $_GET["admin"];?></h1>;
  <?php endif; ?>

<form action="get-practice.php" method="POST">
    <input type="text" name="admin" value="<?php if(!empty($_POST["admin"])) echo $_POST["admin"]; ?>" />
    <input type="password" required name="password">
    <input type="submit" value=" Post Submit">
</form>

<form action="get-practice.php" method="GET">
    <input type="text" name="admin" value="<?php if(!empty($_GET["admin"])) echo $_GET["admin"]; ?>" />
    <input type="password"  required name="password">
    <input type="submit" value=" Get Submit">
</form>
</body>
</html>