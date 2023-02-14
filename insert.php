<?php
    include "navbar.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Insert</title>
</head>
<body>
<?php
include "connection.php";
?>
<div class="container">
  <form method="POST" enctype="multipart/form-data">
    <p>Create New Account</p>
    <input type="name" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <div class="wrap-input100 validate-input" >
	<input class="input100" type="file" name="userfile">
	<span class="focus-input100"></span> 	
	</div>
	<?php 
    if (isset($_GET['error'])): ?>
	<p><?php echo $_GET['error']; ?></p>
	<?php
     endif 
    ?>
        <input type="submit" name="btn" value="Sign in"><br><br>
  </form>

  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>

<?php
include "business_logic.php";
if(isset($_POST["btn"])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="INSERT INTO `employee`( `name`, `email`, `password`) VALUES ('$name','$email','$pass')";
    $result = mysqli_query($con,$sql);
    if(!$result){
        die(mysqli_error($con));
    }
    else{
        echo "<script>
        alert ('Inserted')
        </script>";
    // if($user_data = mysqli_fetch_array($result)){
    //     $_SESSION["name"] = $user_data["name"];
    //     echo "<script>alert('New Account Created ')</script>";
    // }
  }}
?>


</body>
</html>

