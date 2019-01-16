<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        class Chef {
          function makeChicken(){
            echo "The chef makes chicken <br>";
          }
          function makeSalad(){
            echo "The chef makes salad <br>";
          }
          function makeSpecialDish(){
            echo "The chef makes bbq ribs <br>";
          }

          function makeSpecialDish(){
            echo "The chef makes chicken parm";
          }

        }

        class ItalianChef extends Chef {
          function makePasta(){
            echo "The chef makes pasta <br>";
          }
        }

        $chef = new Chef();
        $chef->makeSpecialDish();

        $italianchef = new Chef();
        $italianchef->makeSpecialDish();
    ?>

  </body>
</html>
