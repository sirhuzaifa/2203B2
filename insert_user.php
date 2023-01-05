<?php
    include "navbar.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Insert_User</title>
</head>
<body>

<div class="container">
  <form method="POST" enctype="multipart/form-data">
    <p>Create New User</p>
    <input type="name" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
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
        <input type="submit" name="btn" value="Sign in"><br><br>
  </form>

  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>

<?php

include("connection.php");

if(isset($_POST["btn"])){

    mysqli_query($con,"insert into users(name,email,password,role_id) values ('".$_POST["name"]."','".$_POST["email"]."','".md5($_POST["password"])."','".$_POST["role_id"]."')");
    echo "<script>alert('New User Created')</script>";

}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>