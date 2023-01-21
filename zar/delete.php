<?php

include("connection.php");

mysqli_query($con,"delete from teacher where id=".$_GET["id"]." ");
echo "<script>window.location.assign('show_user.php')</script>";

?>
