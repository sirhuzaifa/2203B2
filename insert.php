<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>REGISTRATION FORM</header>
      <form method='POST' enctype="multipart/form-data">
        <input type="text" name="first" placeholder="Enter your First Name" required>
        <input type="text" name="last" placeholder="Enter your Last Name" required>
        <input type="text" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <br>
        <br>
        <label>Picture</label>
        <input type="file" name="userfile" class="form-control">
        <br>
        <input name="btn" type="submit" class="button" value="Submit" required>
      </form>

      <?php
      if(isset($_POST['btn'])){
        $first_name=$_POST['first'];
        $last_name=$_POST['last'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $sql="INSERT INTO userss( first_name, last_name, email, password) VALUES ('$first_name','$last_name','$email','$pass')";
        $result=mysqli_query($con,$sql);
        move_uploaded_file($_FILES["userfile"]["tmp_name"],"images/".mysqli_insert_id($con).".jpeg");
        if(!$result){
          die(mysqli_error($con));
        }
        else{
          echo "<script>
          alert('Data inserted')
          </script>";
        }
      }
?>
    </div>
  </div>
</body>
</html>

