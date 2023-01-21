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
<table class="table">
    <tr>
        <th>#</th>
        <th>id</th>
<th>name</th>
<th>email</th>
<th>password</th>
<th>action</th>
</tr>

<?php
$query= "SELECT * from home";
$statement= $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$result=$statement->fetchAll();
 $i=1;
foreach($result as $row ){
    ?>
   <tr>
<td><?=  $i ?></td>

<td><?=  $row->id;  ?></td>
<td><?=  $row->name;  ?></td>
<td><?=  $row->email; ?></td>
<td><?= $row->password; ?></td>
<td><a class="btn btn-success" name="btn"  href="edit.php?id=<?=  $row->id; ?>">edit</a>

<td> <a name="del" class="btn btn-danger btn-xs" href="delete.php?id=<?php echo htmlentities($row->id); ?>">delete</a></td>
</td>

</tr>

<?php
$i++;
};
?>








</body>
</html>

