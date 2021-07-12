<?php
include 'controllers/CategoryController.php';
$id = $_GET["id"];
$c = getCategory($id);



?>

<html>
  <body>
    <form action="" method="post">
      <p><h4>Name:</h4><input type="text" name="" value="<?php echo $c["name"];?> "></p>
      <p><input type="submit" name="" value="Edit Category"> </p>
    </form>
  </body>
</html>