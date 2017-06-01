<?php
  include('dblib.php');
  $no=$_POST['no'];
  echo $sql="DELETE FROM wdmProject WHERE no=$no";
  $conn->query($sql);
  $conn->close();
?>
