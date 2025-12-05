<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Culinary Cove &bull; <?php echo $pageTitle; ?></title>
</head>
<body>
  <header class="header-with-background" style="background-image: url('<?php echo $headerImg; ?>'); ">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <a
      <?php 
      if (!empty($activeButton) && $activeButton === "OurMission") : ?> 
      class="active" 
      <?php endif; ?>
       href="our-mission.php">Our mission</a>

      <a
      <?php 
      if (!empty($activeButton) && $activeButton === "Ingredients") : ?> 
      class="active" 
      <?php endif; ?> 
       href="ingredients.php">Ingredients</a>

      <a <?php 
      if (!empty($activeButton) && $activeButton === "Menu") : ?> 
      class="active" 
      <?php endif ;?> 
      href="menu.php">Menu</a>

    </nav>
  </header>

  <main>