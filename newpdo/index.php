<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CURD Operation using PDO Extension  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
</head>
<body>
    <?php
    include("navbar.php")
    ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Insert Record | PHP CRUD Operations using PDO Extension</h3>
<hr />
</div>
</div>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>NAME</b>
<input type="text" name="firstname" class="form-control" required>
</div>
<div class="col-md-4"><b>EMAIL</b>
<input type="email" name="emailid" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>PASSWORD</b>
<input type="password" name="password" class="form-control" required>
</div>
<div class="col-md-4"><b>MOBILE NO</b>
<input type="text" name="contactno" class="form-control" maxlength="11" required>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>ADDRESS</b>
<textarea class="form-control" name="address" required></textarea>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input class="btn btn-secondary" type="submit" name="insert" value="Submit">
</div>
</div>
</form>
</div>
</div>


<?php

include("connection.php");
if(isset($_POST["insert"])){
    $name=$_POST['firstname'];
    $pass=$_POST[md5('password')];
    $emailid=$_POST['emailid'];
    $contactno=$_POST['contactno'];
    $address=$_POST['address'];

    $sql="insert into users (Name,Email,password,Contactno,Address) VALUES(:n,:eml,:ps,:cno,:adrss)";

    $query = $dbcon->prepare($sql);

        $query->bindParam(':n',$name,PDO::PARAM_STR);
        $query->bindParam(':eml',$emailid,PDO::PARAM_STR);
        $query->bindParam(':ps',md5($pass),PDO::PARAM_STR);
        $query->bindParam(':cno',$contactno,PDO::PARAM_STR);
        $query->bindParam(':adrss',$address,PDO::PARAM_STR);
        $query->execute();
$lastInsertId = $dbcon->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index.php'</script>";
    }
}
;
?>
</body>
</html>