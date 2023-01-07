<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Insert user</title>
  </head>
  <body>

  <?php
include("navbar.php");
  ?>
    <h1>Insert User</h1>

    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" required class="form-control" name="name">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" required class="form-control" name="email">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" required class="form-control" name="password">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Role</label>
    <select required class="form-control" name="role_id">
    <?php

include("connection.php");

  $data =   mysqli_query($con,"select * from roles");
while($roles = mysqli_fetch_array($data)){
    ?>
        <option value="<?php echo $roles["id"] ?>" ><?php echo $roles["name"] ?></option>


        <?php } ?>
    </select>

  </div>


  <button name="btn" type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

include("connection.php");

if(isset($_POST["btn"])){


    $check_email="";

    $data = mysqli_query($con,"select email from users where email = '".$_POST["email"]."' ");
    if($user_data = mysqli_fetch_array($data)){
      $check_email = $user_data["email"];
    }

    if($check_email !== $_POST["email"] ){
      mysqli_query($con,"insert into users(name,email,password,role_id) values ('".$_POST["name"]."','".$_POST["email"]."','".md5($_POST["password"])."','".$_POST["role_id"]."')");
      echo "<script>alert('New User Created')</script>";
    }
    else{
      echo "<script>alert('Email Already Registered')</script>";
    }

}

?>





    <?php
include("footer.php");
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