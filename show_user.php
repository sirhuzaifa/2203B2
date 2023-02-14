<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Show_User</title>
  </head>
  <body>

  <?php
include("navbar.php");
  ?>
    <h1>Show Users</h1>

    <table class="table">
  <thead>
  <tr>
  <td class="bg-primary">#</td>
  <td class="bg-success">Name</td>
  <td class="bg-warning">Email</td>
  <td class="bg-danger">Role</td>
  <td class="bg-info">Action</td>
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
    <td></td>

    </tr>
    <?php $i++; } ?>


  </tbody>
</table>



    <?php
include("footer.php");
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>