<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'pdo';
try {

    $dbcon = new PDO("mysql:host = $server;dbname=$db", $user, $password);
}
catch(PDOException $e)
{
    exit("error:" . $e->getMessage());


};
?>