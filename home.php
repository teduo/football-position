<!doctype html>
<html>
  <head>
    <title>Stadium</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1><a href="http://localhost/football/2/home.php">Football</a></h1>
    <div id="grid">
      <ol>
        <?php
        echo file_get_contents("list.txt");
         ?>
      </ol>
    </div>
    <div id="article">
      <?php
      if(empty($_GET['id'])==false){
      echo file_get_contents($_GET['id'].".txt");
      }
       ?>
    </div>
  </body>
</html>
