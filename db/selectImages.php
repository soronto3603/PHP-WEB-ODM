<?php
include('dblib.php');

$sql="SELECT * from wdmImages";

if($_GET['projectNo']!=''){
  $sql+=" WHERE projectNo=projectNo";
}

$result=$conn->query($sql);

if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    print_r(json_encode($row));
  }
}

$conn->close();
?>
