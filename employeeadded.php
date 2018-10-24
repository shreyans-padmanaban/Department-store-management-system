<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
    $data_missing = array();
    if(empty($_POST['name'])){
        // Adds name to array
        $data_missing[] = 'Name';
    } else {
        $f_name = trim($_POST['name']);
    }
    if(empty($_POST['department'])){
        // Adds name to array
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
       require_once('mysqli_connect.php');
       $query = "INSERT INTO employee (name,department,position,address,id,password) VALUES (?, ?, ?. ?, ?, ?)";
       $stmt = mysqli_prepare($dbc, $query);
       mysqli_stmt_bind_param($stmt, "ssssis", $name,$department,$position,$address,$id,$password);
       mysqli_stmt_execute($stmt);
       $affected_rows = mysqli_stmt_affected_rows($stmt);
       if($affected_rows == 1){
           echo 'Employee Added!';
           mysqli_stmt_close($stmt);
           mysqli_close($dbc);
       } else {
           echo 'Error Occurred<br />';
           echo mysqli_error();
           mysqli_stmt_close($stmt);
           mysqli_close($dbc);
       }
   } else {
       echo 'You need to enter the following data<br />';
       foreach($data_missing as $missing){
           echo "$missing<br />";
       }}}
?>
<html>
<head>
<link rel="stylesheets" type="text/css" href="style.css">
</head>
<body>
