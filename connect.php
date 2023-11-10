<?php
$dsn = "";
$user = "";
$pass = "";
try {
    
    $con = new PDO($dsn, $user, $pass);
    //echo 'You Are Connect';
}

catch(PDOException $e) {
    //echo 'failed ' . $e->getMassage(); 
}

$con->query("SET NAMES utf8");

$con->query("SET CHARACTER SET utf8");

?>

