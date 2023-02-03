<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
  

<?php

include("connection.php");

$data = mysqli_query($con,"select * from userss where id = ".$_GET["id"]." ");
if($std_data = mysqli_fetch_array($data)){
?>

<div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>EDIT FORM</header>
      <form method='POST'>
        <input type="text" name="first" placeholder="Enter your First Name" required>
        <input type="text" name="last" placeholder="Enter your Last Name" required>
        <input type="text" name="email" placeholder="Enter your email" required>
        <input name="btn" type="submit" class="button" value="Submit" required>
      </form>

<?php } ?>



<?php 

include("connection.php");
if(isset($_POST["btn"])){

    mysqli_query($con,"update userss set first_name = '".$_POST["first"]."' ,last_name = '".$_POST["last"]."',email = '".$_POST["email"]."'  where id = ".$_GET["id"]." ");
    echo "<script>alert('Updated')</script>";
    echo "<script>window.location.assign('show_data.php')</script>";
    
}

?>
