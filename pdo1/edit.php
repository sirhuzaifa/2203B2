<?php
include('connection.php');
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
<?php

if(isset($_GET['btn'])){
    $student_id=$_GET['id'];
    $query="SELECT * FROM home WHERE id=:stud_id LIMIT 1";
    $statement=$conn->prepare($query);
    $data=[":stud_id"=>$student_id];
    $statement->execute($data);
    $result=$statement->fetch(PDO::FETCH_OBJ);

}
  
?>
<form action="" method="post" >
  <div class="mb-3">
  <label for="name"  class="form-label">name</label>
    <input type="text"  value="<?php echo$result->name;  ?>"  class="form-control"  name="name" />

    <label for="Email" class="form-label">Email address</label>
    <input type="email" value="<?= $result->email;  ?>"   class="form-control" name="email"/>
  </div>
 
  
  <button  name="btn" type="submit" class="btn btn-primary">update</button>

 

<?php

// if(isset($_POST["btn"])){
   
//     $sql="update teacher set name='".$_POST["name"]."',email='".$_POST["email"]."'  where id = ".$_GET["id"]."";
//    $statement= $dbcon->prepare($sql);
//    $statement ->execute($sql);
//     echo "<script>alert('updated')</script>";
//     echo "<script>window.location.assign('show_data.php')</script>";}
//     ?>
    
</form>
</body>
</html>