<?php
  include('dblib.php');
  $no=$_POST['no'];
  echo $sql="DELETE FROM wdmImages WHERE no='$no'";
  $conn->query($sql);
  $conn->close();
?>
