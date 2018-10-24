<html>
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
</style>
<body><div>
<p><center><b><span style="font-size:35px;">Employer's login</b></center></p><br><br>
<?php

require_once('mysqli_connect.php');
$query="SELECT name,department,position,address,id FROM employee;";
$response=@mysqli_query($dbc,$query);
$row;

if($response){
  echo '<table align="left"
  cellspacing="5" cellpadding="8">

  <tr>
  <td align="left"><b>Name</b></td>
  <td align="left"><b>Department</b></td>
  <td align="left"><b>Position</b></td>
  <td align="left"><b>Address</b></td>
  <td align="left"><b>ID</b></td>';

  while($row=mysqli_fetch_array($response)){
    echo '<tr><td align=left>'.
    $row['name'] .'</td><td align="left">' .
    $row['department'] .'</td><td align="left">' .
    $row['position'] .'</td><td align="left">' .
    $row['address'] .'</td><td align="left">' .
    $row['id'] .'</td><td align="left">' ;
    echo '</tr>';}
    echo '<table>';
  }
else{
  echo "Could not connect";
  echo mysqli_error($dbc);

}

mysqli_close($dbc);
?>
<html
