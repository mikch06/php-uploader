<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Uploader!</title>
</head>
<body>

<div class="jumbotron">

            <form action="script/upload.php" method="POST" enctype="multipart/form-data">
         <input type="submit" value="Upload!" class="btn btn-primary btn-lg">
         <input type="file" name="image">

      </form>
</div>



<?php include 'gallery.php' ?>
</body>
</html> 
