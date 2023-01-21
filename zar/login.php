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
    if(isset($_SESSION["name"])){
        echo "<script>window.location.assign('show_user.php')</script>";
       } 
    
    ?>

<form method="post" enctype="multipart/form-data">
  <div class="mb-3">
 

    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">

  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" >
  </div>
  
  <button  name="btn" type="submit" class="btn btn-primary">Submit</button>


  <?php
    include("footer.php");
  
  include('connection.php');
  if(isset($_POST["btn"])){

    $data = mysqli_query($con,"select * from teacher where email = '".$_POST["email"]."' and password = '".$_POST["password"]."' ");
    if($user_data = mysqli_fetch_array($data)){
        $_SESSION["name"] = $user_data["name"];
        echo "<script>alert('Logged In')</script>";
        echo "<script>window.location.assign('show_user.php')</script>";
    }
    else{
        echo "<script>alert('Invalid')</script>";
    }
  }

?>
</form>
</body>
</html>