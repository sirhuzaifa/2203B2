<?php

$servername="localhost";
$username="root";
$password="";
$database="phppdo";

try{
    $conn = new PDO("mysql:host=$servername; dbname=$database", $username,$password);
    
}
catch(PDOException $e){
    echo "connection failed" .$e->getMessage();

}









?>