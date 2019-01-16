<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Basic Array</h1>

    <?php
      $friends = array("Lucas", "Dylan", "Matt", "Jordan");
      $friends[1] = "something else";
      $friends[4] = "Angela";
      echo count($friends);
    ?>

  </body>
</html>
