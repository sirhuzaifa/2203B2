<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
  

  <?php
    include("navbar.php");
  ?>


<h1>Edit</h1>

<?php

include("connection.php");

$data = mysqli_query($con,"select * from users where id = ".$_GET["id"]." ");
if($std_data = mysqli_fetch_array($data)){
?>

<form method="POST">
    <input type="text" name="username" class="form-control" value="<?php echo $std_data["name"] ?>" placeholder="Enter Name">
    <br>
    <input type="email" name="useremail" class="form-control" value="<?php echo $std_data["email"] ?>"  placeholder="Enter Email">
    <br>
   
    <button type="submit" name="btn" class="btn btn-dark">Update</button>
</form>

<?php } ?>
<?php
    include("footer.php");
  ?>




<?php 

include("connection.php");
if(isset($_POST["btn"])){

    mysqli_query($con,"update users set name = '".$_POST["username"]."' ,email = '".$_POST["useremail"]."'  where id = ".$_GET["id"]." ");
    echo "<script>alert('Updated')</script>";
    echo "<script>window.location.assign('show_data.php')</script>";
    
}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>