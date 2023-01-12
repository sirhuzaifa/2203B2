



<table class="table">
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
  $data =   mysqli_query($con,"SELECT users.id,users.name,users.email,roles.name as role_name FROM users inner join roles on users.role_id = roles.id where users.role_id = ".$_GET["role_id"]." ");
  while($roles = mysqli_fetch_array($data)){
?>

    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $roles["name"] ?></td>
      <td><?php echo $roles["email"] ?></td>
      <td><?php echo $roles["role_name"] ?></td>
      <td></td>

    </tr>


<?php $i++; } ?>

   
  </tbody>
</table>