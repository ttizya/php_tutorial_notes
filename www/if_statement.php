<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $isMale = false;
      $isTall = true;
      if ($isMale && $isTall) {
        echo "You are a tall male";
      } elseif ($isMale && !$isTall) {
        echo "You are a short male";
      } elseif (!$isMale && $isTall) {
        echo "You are a tall female";
      } else {
        echo "You are a short female";
      }
    ?>

  </body>
</html>
