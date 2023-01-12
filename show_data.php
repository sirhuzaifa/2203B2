<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>insert</title>
    <style>
        .form-label{
            color:red;
            font-weight: 800;
            font-size:25px;
           
        }
        html body{
            background-color:lightblue;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <?php
  include('navbar.php');

?>
<h1>SHOW_RECORDS</h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include("connection.php");

  $data = mysqli_query($con,"select * from users");
  $i = 1;
  while( $user_data = mysqli_fetch_array($data) ){
  ?>

  <tr>
    <th scope="row"><?php echo $i ?></th>
    <td><?php echo $user_data["name"]?></td>
    <td><?php echo $user_data["email"]?></td>
    <td><?php echo $user_data["password"]?></td>
    <td><a class="btn btn-danger" href="delete-user.php?id=<?php echo $user_data["id"]?>">Delete</a></td>
  </tr>
<?php $i++; } ?>
  </tbody>
</table> 
<?php

  include('footer.php');
    ?>

  
</html>