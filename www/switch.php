<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="switch.php" meathod="get">
      What was your grade?
      <input type="text" name="grade">
      <input type="submit">






    </form>

    <?php
      $grade = $_GET["grade"];
      switch ($grade) {
        case "A":
          echo "You did great!";
          break; // breaks out of switch statement
        case "B":
          echo "You did pretty good!";
          break;
        case "C":
          echo "You could do better!";
          break;
        case "D":
          echo "You did terrible!";
          break;
        case "F":
          echo "You Fail!";
          break;
        default:
          echo "Invalid Entry";
          break;
      }


    ?>

  </body>
</html>
