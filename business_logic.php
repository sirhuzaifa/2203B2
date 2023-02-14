
<?php

function insert_query($btn_name,$query){

  include('connection.php');
  if(isset($_POST[$btn_name])){

mysqli_query($con,$query);
move_uploaded_file($_FILES["userfile"]["tmp_name"],"userimages/".mysqli_insert_id($con).".jpeg");
      echo "<script>alert('Inserted')</script>";
      
  }
}
?>

