<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>insert</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<h1>SHOW_RECORDS</h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include("connection.php");
$sql="SELECT * FROM userss";
$result=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($result)) {
  ?>

  <tr>
    <th scope="row"><?php echo $row['id']?></th>
    <td><?php echo $row["first_name"]?></td>
    <td><?php echo $row["last_name"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["password"]?></td>
    <td><a class="btn btn-danger" href="delete-user.php?id=<?php echo $row["id"]?>">Delete</a></td>
  </tr>
<?php 
}
?>
  </tbody>
</table> 

  
</html>