<?php

include('connection.php');


if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="INSERT into home(name,email,password) values (:name,:email,:password)";
    $query_run =$conn->prepare($query);
    $data=[
        ':name'=>$name,
        ':email'=>$email,
        ':password'=>$password,
    ];
    $query_run->execute($data);



  echo"<script>alert('inserted')</script>";
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    

<form method="post" >
  <div class="mb-3">
  <label for="name"  class="form-label">name</label>
    <input type="text" required class="form-control"  name="name" >

    <label for="Email" class="form-label">Email address</label>
    <input type="email" required class="form-control" name="email">

    

    
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" required name="password" class="form-control" >
  </div>
  
  <button  name="btn" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
