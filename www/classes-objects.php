<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        class Book{
          var $title;
          var $author;
          var $pages;

          // efficient
          function __construct($aTitle, $aAuthor, $aPages) {
            $this->title = $aTtile; //this = current object
            $this->author = $aAuthor;
            $this->pages = $aPages;
          }

        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400); //object
        $book1->title = "Hunger Games";
        $book2 = new Book("Lord Of The Rings", "Tolkein", 700);

        echo $book1->title;


    ?>

  </body>
</html>
