<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include "c:/xampp/htdocs/department-store-mgmt/config.php";
$query="SELECT * from users;";
$result=mysqli_query($link,$query);

while($value=mysqli_fetch_array($result)){
  echo $value['username'];
}
?>

<html>
<head><style>a{margin:10%}</style></head>
<a href="logout.php">Logout</a></html>
