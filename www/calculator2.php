<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="calculator2.php" method="get">
      First Num:<input type="number" step="0.00000001" name="num1"> <br>
      OP: <input type="text" name="op"> <br>
      Second Num:<input type="number" step="0.00000001" name="num2"> <br>
      <input type="submit">
    </form>

    <?php
      $num1 = $_GET["num1"];
      $num2 = $_GET["num2"];
      $op = $_GET["op"];

      if($op == "+"){
        echo $num1 + $num2;
      } elseif ($op == "-"){
        echo $num1 - $num2;
      } elseif ($op == "/"){
        echo $num1 / $num2;
      } elseif ($op == "*"){
        echo $num1 * $num2;
      } else {
        echo "Invalid Operator";
      }

    ?>

  </body>
</html>
