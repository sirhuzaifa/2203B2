
<?php

function insert_query($btn_name,$query){

  include('connection.php');
  if(isset($_POST[$btn_name])){

     mysql_query($con,$query);
     move_uploaded_file($_FILES["userfile"]["tmp_name"],"images/".mysqli_insert_id($con).".jpg");
      echo "<script>alert('Inserted')</script>";
      
  }
}




?>