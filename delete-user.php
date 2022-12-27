<?php
include "connection.php";
$id=$_GET['id'];
$sql="DELETE FROM userss where id=$id";
$result=mysqli_query($con,$sql);
if(!$result){
    die(mysqli_error($con));
}
else{
    header("location:show_data.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>