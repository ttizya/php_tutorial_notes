<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      // lines execute in order
      echo "<h1>Tom's Site</h1>";
      echo "<hr>"; //horizontal rule(line)
      echo "<P>This is my site where I learn the basics of php</p>";
      echo "<p>This is my learning process and the tutorial notes</p>";
      echo "<hr>";


      //variables
      echo "exercise_1 basic variables <br>"; //exercise 1

      $characterName = "Tom"; // '$' indicates a new variable init
      $characterAge = 19; // numbers dont need ""

      echo "There once was a man named $characterName <br>"; // var inserted '$'
      echo "He was $characterAge years old <br>"; //<br> = line break
      $characterName = "John"; // variable updated in exe order
      echo "He really liked the name $characterName <br>";
      echo "But didn't like being $characterAge <br>";


      //Data Types
      echo "exercise_2 different data types<br>"; //exercise 2

      $phrase = "To be or not to be"; //string
      $age = 30; //integer
      $gpa = 3.74; //floating-point number (decimal number)
      $isMale = true; //boolean value (true or false, binary)
      // null = no value
      echo "$phrase <br>";
      echo "$age <br>";
      echo "$gpa <br>";
      echo "$isMale <br>";

      $phrase = "college is for loosers";
      echo strtolower("$phrase <br>"); // lower case , str = string
      echo strtoupper("$phrase <br>"); // upper case
      echo strlen("$phrase <br>"); // print string length
      echo ("$phrase[0] <br>"); // index[] which character to print from string
    //   echo $phrase[0] = "B"; // change indexed letter to somthing else
      echo "$phrase <br>";

    //  echo str_replace("college", "dkfjgh", $phrase); //replace a string segment

      echo substr($phrase, 15, 6);


    ?>



  </body>
</html>
