<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        class Student{
          var $name;
          var $major;
          var $gpa;

          // efficient
          function __construct($name, $major, $gpa) {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
          }

          function hasHonors(){
            if($this->gpa >= 3.5){
              return "true";
            } else {
              return "false";
            }

          }

        }

        $student1 = new Student("Jim", "Computer Science", 4.0);
        $student2 = new Student("Mike", "Chemistry", 3.9);


        echo $student1->hasHonors();


    ?>

  </body>
</html>
