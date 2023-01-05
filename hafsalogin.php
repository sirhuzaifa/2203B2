<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  

  <?php
    include("navbar.php");


    if(isset($_SESSION["name"])){
        echo "<script>window.location.assign('show_data.php')</script>";
       } 
  ?>


<h1>Login</h1>

<form method="POST">

    <input type="email" name="useremail" class="form-control" placeholder="Enter Email">
    <br>
    <input type="password" name="userpassword" class="form-control" placeholder="Enter Password">
    <br>
    <br>

    <button type="submit" name="btn" class="btn btn-dark">Login</button>
</form>


<?php
    include("footer.php");
  ?>




<?php 
  include('connection.php');
  if(isset($_POST["btn"])){

    $data = mysqli_query($con,"select * from users where email = '".$_POST["useremail"]."' and password = '".$_POST["userpassword"]."' ");
    if($user_data = mysqli_fetch_array($data)){
        $_SESSION["name"] = $user_data["name"];
        echo "<script>alert('Logged In')</script>";
        echo "<script>window.location.assign('show_data.php')</script>";
    }
    else{
        echo "<script>alert('Invalid')</script>";
    }
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