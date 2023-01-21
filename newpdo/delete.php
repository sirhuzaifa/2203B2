<?php

include("connection.php");
if(isset($_REQUEST['del']))
{
$uid=intval($_GET['del']);
$sql = "delete from users WHERE  id=:id";
$query = $dbcon->prepare($sql);
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='show.php'</script>";
}
?>
