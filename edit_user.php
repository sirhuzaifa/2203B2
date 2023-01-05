<?php
$id = $_GET['id'];
include "connection.php";
if(isset($_POST['btn'])){
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $sql1="UPDATE `users` SET `email`='$email',`password`='$pass' WHERE id='$id'";
  $result = mysqli_query($con,$sql1);
  if(!$result){
    die(mysqli_error($con));
  }else{
    echo "<script>
    alert('Your Info is updated')
    </script>";
    echo "<script>window.location.assign('show_data.php')</script>";

  }
}
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
  include "navbar.php";
  ?>
<div class="container">
  <form method="POST" enctype="multipart/form-data">
    <p>Edit Your Info</p>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <div class="wrap-input100 validate-input" >
	<input class="input100" type="file" name="userfile">
	<span class="focus-input100"></span> 	
	</div>
          <?php
         
         $sql="SELECT * FROM employee WHERE id='$id'";
         $result=mysqli_query($con,$sql);
         while($row=mysqli_fetch_array($result)){
         ?>
		<?php
         }
          ?>
		<div class="container-login100-form-btn">
		<input type="submit" name="btn" class="login100-form-btn" value="Save">
		</div>
		</form>
		</div>
		</div>
	</div>



<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"781b561a3bcdde53","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>

</body>
</html>