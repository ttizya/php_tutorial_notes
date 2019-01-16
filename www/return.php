<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      function cube($num){
        echo "Hello";
        return $num * $num * $num; //return indicates end of function
        echo "Hello"; // won't be read or shown by php
      }
      function square($num){
        echo "Hello";
        return;

      }
      echo cube(4);
      echo square(4);
    ?>

  </body>
</html>
