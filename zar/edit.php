<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>
<?php

include("connection.php");

$data=mysqli_query($con,"select *  from teacher where id= ".$_GET["id"]."");

if($std_data=mysqli_fetch_array($data)){

?>





<form method="post" enctype="multipart/form-data">
  <div class="mb-3">
  <label for="name"  class="form-label">name</label>
    <input type="text" value="<?php echo $std_data["name"]?>" class="form-control"  name="name" >

    <label for="Email" class="form-label">Email address</label>
    <input type="email"  value="<?php echo $std_data["email"]?>" class="form-control" name="email">

    <label class="form-label" for="picture">add pictures</label><br>
    <input type="file" name="file" >
 
  </div>
 
  
  <button  name="btn" type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}
?>
    

<?php


if(isset($_POST["btn"])){
    mysqli_query($con,"update teacher set name='".$_POST["name"]."',email='".$_POST["email"]."'  where id = ".$_GET["id"]."");
    move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$_GET["id"].".jpeg");
    echo "<script>alert('updated')</script>";
    echo "<script>window.location.assign('show_user.php')</script>";
}



?>

















</body>
</html>
