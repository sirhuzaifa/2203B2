
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  
  <?php
include("connection.php");

$userid=intval($_GET['id']);
$sql = "select * from users where id=:uid";
$query = $dbcon->prepare($sql);
$query->bindParam(':uid',$userid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>

  <form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>First Name</b>
<input type="text" name="firstname" value="<?php echo htmlentities($result->name);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Email</b>
<input type="email" name="emailid" value="<?php echo htmlentities($result->email);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>password</b>
<input type="password" name="password" value="<?php echo htmlentities($result->password);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Contactno</b>
<input type="text" name="contactno" value="<?php echo htmlentities($result->contactno);?>" class="form-control" maxlength="10" required>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Address</b>
<textarea class="form-control" name="address" required><?php echo htmlentities($result->address);?></textarea>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php }} ?>


<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">

<?php
if(isset($_POST['update']))
{

$userid=intval($_GET['id']);

$fname=$_POST['firstname'];
$pass=$_POST['password'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];

$sql="update users set Name=:n,email=:eml,password=:ps,contactno=:cno,address=:adrss where id=:uid";

$query = $dbcon->prepare($sql);

$query->bindParam(':n',$fname,PDO::PARAM_STR);
$query->bindParam(':eml',$emailid,PDO::PARAM_STR);
$query->bindParam(':ps',$pass,PDO::PARAM_STR);
$query->bindParam(':cno',$contactno,PDO::PARAM_STR);
$query->bindParam(':adrss',$address,PDO::PARAM_STR);
$query->bindParam(':uid',$userid,PDO::PARAM_STR);

$query->execute();

echo "<script>alert('Record Updated successfully');</script>";

echo "<script>window.location.href='show.php'</script>";
}
?>
</div>
</div>
</form>
  </body>
</html>

