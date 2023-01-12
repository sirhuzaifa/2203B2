<?php
include("connection.php");
mysqli_query($con,"delete from users where id = ".$_GET["id"]." ");
echo "<script>window.location.assign('show_data.php')</script>";
?>