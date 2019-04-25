<?php
$dsn = "mysql:host=localhost;dbname=healthyh_spirulina";
$user = "healthyh_mo7meds";
$pass = "01205435978";
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

