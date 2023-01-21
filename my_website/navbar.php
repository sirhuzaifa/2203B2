<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>navbar</title>
  <style>
    .navbar  {
    background-color:#43c5bf;
  }
   .navbar-brand{
    color:gray;
    font-size:28px;
    font-weight:800;
  }
.nav-link{
  color:gray;
  font-weight:500;

}
  </style>
</head>
<body>
  


<?php
session_start();
?>

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">P.R</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php if(isset($_SESSION["name"])){ ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="show_data.php">Show-Data</a>
        </li>
        <?php } ?>
        <?php if(isset($_SESSION["name"])){ ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
        <?php } ?>
        
        <?php if(!isset($_SESSION["name"])){ ?>
        <li class="nav-item">
          <a class="nav-link active" href="login.php" >Login</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link active" href="signup.php" >Signup</a>
        </li>
      </ul>
      <form class="d-flex">
        <?php if(isset($_SESSION["name"])){ echo  $_SESSION["name"]; }else{ echo "Not SignIn"; } ?>
      </form>
    </div>
  </div>
</nav>
        </body>
        </html>