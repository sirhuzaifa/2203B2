<?php
include "connection.php";
$id=$_GET['id'];
$sql="DELETE FROM users where id=$id";
$result=mysqli_query($con,$sql);
if(!$result){
    die(mysqli_error($con));
}
else{
    header("location:show_data.php");
}
?>