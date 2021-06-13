<html>
    <head></head>
    <body>
      <?php
      $length = 30;
      $width = 30;

      function rectangle(){
          global $length;
          global $width;

          $recPerimeter = 2*($length+ $width);

          $recArea = $length *$width;
          echo "The perimeter of the rectangle: $recPerimeter <br>";
          echo "The area of the rectangle: $recArea <br>";

        if($length === $width){
            echo "The shape is square";
        }

      }

      rectangle();


      ?>
      
    </body>