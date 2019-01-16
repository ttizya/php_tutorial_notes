<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="site4.php" meathod="get">
      Name: <input type="text" name="name"> <br>
      <input type="submit">
    </form>
    <br><br>

    <?php
      echo $_GET["name"];
     ?>
  </body>
</html>
