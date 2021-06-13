<html>
    <head></head>
    <body>
      <?php
      $marks = 65;
      if($marks >="90"){
          echo"A+";
      } elseif($marks>="80" and $marks < "90") {
          echo"A";
      } elseif($marks>="70" and $marks < "90"){
        echo"B";
    }  elseif($marks>="60" and $marks < "70"){
        echo"C";
    } else{
        echo "the grade is : F";
    }

      ?>
      
    </body>