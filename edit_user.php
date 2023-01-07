<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>edit user</title>
  </head>
  <body>

  <?php
include("navbar.php");
  ?>


<?php 

include("connection.php");

$data=  mysqli_query($con,"select * from users where id = ".$_GET["id"]." ");
if($user_data = mysqli_fetch_array($data)){
?>

    <h1>Edit User</h1>

    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" value="<?php echo $user_data["name"] ?>" required class="form-control" name="name">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" required  value="<?php echo $user_data["email"] ?>" class="form-control" name="email">

  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Role</label>
    <select required class="form-control" name="role_id">
    <?php

include("connection.php");

  $data =   mysqli_query($con,"select * from roles where id = ".$user_data["role_id"]." ");
while($roles = mysqli_fetch_array($data)){
    ?>
        <option value="<?php echo $roles["id"] ?>" ><?php echo $roles["name"] ?></option>


        <?php } ?>
        <?php

include("connection.php");

  $data =   mysqli_query($con,"select * from roles where id != ".$user_data["role_id"]."");
while($roles = mysqli_fetch_array($data)){
    ?>
        <option value="<?php echo $roles["id"] ?>" ><?php echo $roles["name"] ?></option>


        <?php } ?>
    </select>

  </div>


  <button name="btn" type="submit" class="btn btn-primary">Submit</button>
</form>

<?php } ?>

<?php

include("connection.php");

if(isset($_POST["btn"])){

    mysqli_query($con,"update users set name ='".$_POST["name"]."',email = '".$_POST["email"]."' ,role_id = '".$_POST["role_id"]."' where id =  ".$_GET["id"]." ");
    echo "<script>alert('User Updated')</script>";
    echo "<script>window.location.assign('show_user.php')</script>";

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