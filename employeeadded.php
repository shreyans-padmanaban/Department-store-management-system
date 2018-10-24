<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $data_missing = array();
    if(empty($_POST['name'])){
        $data_missing[] = 'Name';
    } else {
        $f_name = trim($_POST['name']);
    }
    if(empty($_POST['department'])){
        $data_missing[] = 'department';
    } else {
      $f_name = trim($_POST['department']);
    }
    if(empty($_POST['position'])){
        $data_missing[] = 'position';
    } else {
        $f_name = trim($_POST['position']);
    }
    if(empty($_POST['address'])){
        $data_missing[] = 'address';
    } else {
        $f_name = trim($_POST['address']);
    }
    if(empty($_POST['id'])){
        $data_missing[] = 'id';
    } else {
        $f_name = trim($_POST['id']);
    }
    if(empty($_POST['password'])){
        $data_missing[] = 'password';
    } else {
        $f_name = trim($_POST['password']);
    }
    if(empty($data_missing)){
       require('mysqli_connect.php');
       $name = $_POST['name'];
       $department = $_POST['department'];
       $position = $_POST['position'];
       $address=$_POST['address'];
       $id=$_POST['id'];
       $password=$_POST['password'];
       $query = "INSERT INTO `employee` (name,department,position,address,id,password) VALUES ('$name','$department','$position','$address','$id','$password')";
       $result = mysqli_query($dbc, $query);
       if($result){
           $smsg = "User Created Successfully.";
       }else{
           $fmsg ="User Registration Failed";}
   } else {
       echo 'You need to enter the following data<br />';
       foreach($data_missing as $missing){
           echo "$missing<br />";
       }}}
?>
<html>
<head>
<!--link rel="stylesheet" type="text/css" href="style.css"-->
</head>
<body><center><a href="index.html">Go to Home page</a></div>
