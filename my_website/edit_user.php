<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <title>Edit</title>
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




<?php

include("connection.php");

$data = mysqli_query($con,"select * from users where id = ".$_GET["id"]." ");
if($std_data = mysqli_fetch_array($data)){
?>



<div class="container-fluid  ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-10 login-box">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 log-det">
                           
                            <h2>Edit Data</h2>
                           
                            <div class="row">
                                <p class="small-info">  </p>
                            </div>

                            <form method="post"  enctype="multipart/form-data">
                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control" value="<?php echo $std_data["name"] ?>" placeholder="Enter Name" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="email" name="useremail" class="form-control" value="<?php echo $std_data["email"] ?>"  placeholder="Enter Email"  aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="file" name="userfile" class="form-control" aria-describedby="basic-addon1">
                                </div>
                                <div class="row">
                                    <p class="forget-p"> </p>
                                </div>
                                <div class="input-group center mb-3">
                                    <button type="submit" name="btn" class="btn btn-success btn-round">UPDATE</button>
                                </div>    
                            </div>
                       </form>
                        </div>
                        <div class="col-lg-4 col-md-5 box-de">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
jn


<?php } ?>
<?php
    include("footer.php");
  ?>




<?php 

include("connection.php");
if(isset($_POST["btn"])){

    mysqli_query($con,"update users set name = '".$_POST["username"]."' ,email = '".$_POST["useremail"]."'  where id = ".$_GET["id"]." ");
    move_uploaded_file($_FILES["userfile"]["tmp_name"],"images/".$_GET["id"].".jpeg");
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
  <script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>