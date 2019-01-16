<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


     <form action="site3.php" meathod="get">
      Name: <input type="text" name="username">
      <br>
      Age: <input type="number" name="age">
      <input type="submit">

     </form>
     <br>
     Your name is: <?php echo $_GET["username"] ?>
     <br>
     Your age is: <?php echo $_GET["age"] ?>

  </body>
</html>
