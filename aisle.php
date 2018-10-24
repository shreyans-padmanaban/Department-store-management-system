<html>
<a href="logout.php">Logout</a>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Quicksand');
body{
  background-image: url('bg1.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
div{
  background: white;
  margin-top:20%;
  margin-left: 30%;
  margin-right: 40%;
  font-family: 'Quicksand';
}
p{
  font-weight: bold;
}
</style></head>
<body><div>
<p><center><b><span style="font-size:35px;">Employer's login</b></center></p><br><br>
<?php

require_once('mysqli_connect.php');
$query="SELECT 'number','emp_id','stock','category' FROM aisle;";
$response=@mysqli_query($dbc,$query);
$row;

if($response){
  echo '<table align="left"
  cellspacing="5" cellpadding="8">

  <tr>
  <td align="left"><b>Aisle Number</b></td>
  <td align="left"><b>Employee assigned</b></td>
  <td align="left"><b>Supply(1=Stocked,0=Null)</b></td>
  <td align="left"><b>Category</b></td>';

  while($row=mysqli_fetch_array($response)){
    echo '<tr><td align=left>'.
    $row['number'] .'</td><td align="left">' .
    $row['emp_id'] .'</td><td align="left">' .
    $row['stock'] .'</td><td align="left">' .
    $row['category'] .'</td><td align="left">' ;
    echo '</tr>';}
    echo '<table>';}
else{
  echo "Could not connect";
  echo mysqli_error($dbc);

}

mysqli_close($dbc);
?>
<html>
<body>
  <center><br><button><a href="logout.php">Logout</a></button><br><button><a href="addemployee.php">Add new Employee</a></button></body></html>
