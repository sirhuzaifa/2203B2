

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>insert</title>
    <style>
        .form-label{
            color:red;
            font-weight: 800;
            font-size:25px;
           
        }
        html body{
            background-color:lightblue;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <?php
  include('navbar.php');

?>
<br>
<div class="container">

<form method='POST'>

<div class="mb-3">
    <label  for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
 
  <button type="submit" name="btn" class="btn btn-danger">Submit</button>
</form>
    </div>


<?php
function insert_query($btn_name,$query){
  include('connection.php');
   if(isset($_POST[$btn_name])){
       mysqli_query($cn,$query);
       echo "<script>alert('inserted')</script>";
   }
 }

insert_query("btn","insert into employee(name,email,password) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')");

  include('footer.php');
    ?>

<?php


?>

  
</html>