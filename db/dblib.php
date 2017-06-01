<?php
$servername="localhost";
$username="soronto3603";
$password="2262552a";
$dbname="WebDroneMap";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}
//echo "Connected successfully";
?>
