<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <title>Sign up</title>
    <style>
      .container{
       margin-bottom:50px;
       margin-top:-50px;
      }
    </style>
  </head>
  <body>
  <?php
    include("navbar.php");
  ?>


<div class="container-fluid ">
        <div class="container ">
            <div class="row ">
                
                <div class="col-sm-10 login-box">
                    <div class="row">
                       <div class="col-lg-4 col-md-5 box-de">
                          
                            <div class="ditk-inf sup-oi">
                                <h2 class="w-100">Already Have an Account </h2>
                                <p>Simply login to your account by clicking the login Button</p>
                                <a href="login.php">
                                    <button type="button" class="btn btn-outline-light">LOG IN</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 log-det">
                            
                            <h2>Create Account In Pakistan Railway</h2>
                           
                            <div class="row">
                                <p class="small-info">your email account</p>
                            </div>

                            <form method="POST" enctype="multipart/form-data">
                            <div class="text-box-cont">


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                               

                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="useremail" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        
                                        </span>
                                    </div>
                                    <input type="number" name="usernumber" class="form-control" placeholder="Mobile Number" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                
                                <div class="input-group mb-3">
                                    
                                    <input type="file" name="userfile" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" name="userpassword" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                               
                                <div class="input-group center sup mb-3">
                                    <button type="submit" name="btn" class="btn btn-success btn-round">SIGN UP</button>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
    include("footer.php");
  
include("business_logic.php");
insert_query("btn","INSERT INTO `users`( `name`, `email`, `number`, `password`) VALUES ('".$_POST["username"]."','".$_POST["useremail"]."','".$_POST["usernumber"]."','".md5($_POST["userpassword"])."')");

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
  <script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>