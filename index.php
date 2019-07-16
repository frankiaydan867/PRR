<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="View/bootstrap/css/bootstrap.css">
    <title>PRR TEST</title>
    <?php require('Controller/db_config.php'); ?>
  </head>
  <body>
    <?php require('View/header.php'); ?>


    <?php
      $pdo = new PDO(DB_HOST,DB_USER,DB_PASS);

      if($pdo){
        echo 'Connection worked';
      }




     ?>

  </body>
</html>
