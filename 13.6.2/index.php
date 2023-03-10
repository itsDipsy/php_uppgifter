<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <?php 
        for ($i=0; $i < 100; $i++) { 
          if($i % 2 == 0){
            $even_box_class = "even_box";
            $even_box = "<div class=$even_box_class>$i</div>";
            echo $even_box;
          }
          else{
            $box_class = "box";
            $box = "<div class=$box_class>$i</div>";
            echo $box;
          }
        }
      ?>
  </body>
</html>