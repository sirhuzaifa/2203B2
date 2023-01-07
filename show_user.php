<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>show user</title>
  </head>
  <body>

  <?php
include("navbar.php");
  ?>
    <h1>Show Users</h1>


    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php

include("connection.php");

$i =1;
  $data =   mysqli_query($con,"SELECT users.id,users.name,users.email,roles.name as role_name FROM users inner join roles on users.role_id = roles.id");
while($users = mysqli_fetch_array($data)){
    ?>

    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $users["name"] ?></td>
      <td><?php echo $users["email"] ?></td>
      <td><?php echo $users["role_name"] ?></td>
    <td><a href="edit_user.php?id=<?php echo $users["id"] ?>" class="btn btn-success">Edit</a></td>

    </tr>
    <?php $i++; } ?>


  </tbody>
</table>



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