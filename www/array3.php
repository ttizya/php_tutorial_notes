<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Accosiative Array -->
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="array3.php" meathod="get">
      <input type="text" name="student">
      <input type="submit">
    </form>

    <?php
      $grades = array("Jim"=>"A+", "Pam"=>"B-", "Josh"=>"C+"); //key and value
      echo $grades[$_GET["student"]];
    ?>

  </body>
</html>
