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
if($std1_data = mysqli_fetch_array($data)){
?>

<form method="POST">
    <input type="text" name="username" class="form-control" value="<?php echo $std1_data["name"] ?>" placeholder="Enter Name">
    <br>
    <input type="email" name="useremail" class="form-control" value="<?php echo $std1_data["email"] ?>"  placeholder="Enter Email">
    <br>
    <input type="file" name="userfile" class="form-control"> 
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




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->











  </body>
</html>