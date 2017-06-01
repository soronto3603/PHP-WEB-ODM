<?php
  function insertImage($src,$projectNo){
    include("dblib.php");
    $sql="INSERT INTO wdmImages(no,src,projectNo) VALUES(NULL,'$src','$projectNo')";
    if($conn->query($sql)==TRUE){
      echo "New record created successfully";
    }else{
      echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
  }
  // $src=$_POST['src'];
  // $projectNo=$_POST['projectNo'];

?>
