<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User-Record</title>
  </head>
  <body>
  

  <?php
    include("navbar.php");
  ?>


<h1>User-Record</h1>

<a class="btn btn-primary" href="insert.php">Create User</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
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
      <td><?php echo $user_data["password"] ?></td>
      <td><a class="btn btn-success" href="edit_user.php?id=<?php echo $user_data["id"] ?>">Edit</a>
      <a class="btn btn-danger" href="delete_user.php?id=<?php echo $user_data["id"] ?>">delete</a>
    </td>
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