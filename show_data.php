<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Show-Data</title>
  </head>
  <body>
  

  <?php
    include("navbar.php");


     if(!isset($_SESSION["name"])){
      echo "<script>window.location.assign('login.php')</script>";
     } 
      
      
  ?>


<h1>Show-Data</h1>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Picture</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>


  <?php 
  
  include("connection.php");

  $data = mysqli_query($con,"select * from users");
    $i = 1;
  while( $user_data =  mysqli_fetch_array($data) ){

  ?>

    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $user_data["name"] ?></td>
      <td><?php echo $user_data["email"] ?></td>
      <td><?php echo $user_data["status"] ?></td>
      <td><img src="userimages/<?php echo $user_data["id"] ?>.jpeg" height="100px" width="100px"></td>
      <td><a class="btn btn-success" href="edit_user.php?id=<?php echo $user_data["id"] ?>">Edit</a></td>
      <td><a class="btn btn-danger" href="delete_user.php?id=<?php echo $user_data["id"] ?>">delete</a></td>
    </tr>

    <?php $i++; } ?>


  
   
  </tbody>
</table>

<a style="margin-left:45%;" class="btn btn-primary" href="insert.php"  >Create User</a>

<?php
    include("footer.php");
  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




  </body>
</html>