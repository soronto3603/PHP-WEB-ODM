<?php
include('dblib.php');

$sql="SELECT * from wdmProject";

$result=$conn->query($sql);

$rowArray=array();
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    array_push($rowArray,$row);
  }
  print_r(json_encode($rowArray));
}

$conn->close();
?>
