
<?php

function insert_query($btn_name,$query){

  include('connection.php');
  if(isset($_POST[$btn_name])){

      mysqli_query($con,$query);
      echo "<script>alert('Inserted')</script>";
      
  }
}




?>