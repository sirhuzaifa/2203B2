<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<?php
include("navbar.php");
?>
<table class="table">
    <tr>
        <th>#</th>
<th>name</th>
<th>email</th>
<th>password</th>
<th>picture</th>
<th>action</th>
</tr>



<?php
include("connection.php");

$data=mysqli_query($con,"select * from teacher");
$i=1;
while($user_data=mysqli_fetch_array($data)){
?>


<tr>

<th><?php echo $i ?></th>
<td><?php echo $user_data["name"]?></td>
<td><?php echo $user_data["email"]?></td>
<td><?php echo $user_data["password"]?></td>
<td><img src="images/<?php echo $user_data["id"] ?>.jpeg" height="80px" width="100px"></td>
<td> <a  class="btn btn-danger"  href="delete.php?id=<?php echo $user_data["id"] ?> "> delete</a>
 <a  class="btn btn-success" href="edit.php?id=<?php echo $user_data["id"] ?> "> edit</a></td>

</tr>

<?php
 
}
?>






</table>
</body>
</html>