<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="app.css">
    <title></title>
    <?php
      include  "../src/database.php";
    ?>
  </head>
  <body>
    <header>
      <div class="container">
        <img src="logo.svg" alt="logo">
      </div>
    </header>

  <main class="container">
    <?php
    foreach ($db as $album) { ?>
      <div class="disco">
        <img src="<?php echo $album['poster']; ?>" alt="poster">
        <h3><?php echo $album['title']; ?></h3>
        <span><?php echo $album['author']; ?>;</span>
        <span><?php echo $album['year']; ?></span>
      </div>
    <?php } ?>
  </main>





  </body>
</html>
