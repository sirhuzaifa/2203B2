<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include("navbar.php");
    ?>

<form method="post" enctype="multipart/form-data">
  <div class="mb-3">
  <label for="name"  class="form-label">name</label>
    <input type="text" class="form-control"  name="name" >

    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">

    <label class="form-label" for="picture">add pictures</label><br>
    <input type="file" name="file" >

    
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" >
  </div>
  
  <button  name="btn" type="submit" class="btn btn-primary">Submit</button>
</form>
    
















<?php
include("connection.php");


 if(isset ($_POST["btn"])){
  mysqli_query($con,"INSERT INTO teacher( `name`, `email`,  `password`) values ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."')");
  move_uploaded_file($_FILES["file"]["tmp_name"],"images/".mysqli_insert_id($con).".jpeg");
  echo "<script>alert('Inserted')</script>";
}

include("footer.php");

?>
</body>
</html>