<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Gallery</title>
</head>
<body>

<?php
  $dir = "images/*.jpg";
  $images = glob( $dir );
  foreach( $images as $image ):
      echo "<img src='" . $image . "' class=gallery>";
  endforeach;
?>

</body>
</html>

