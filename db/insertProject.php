<?php
  include("dblib.php");
  $name=$_POST['name'];
  echo $sql="INSERT INTO wdmProject(no,dir_name)
  VALUES(NULL,'$name')";
  if($conn->query($sql)==TRUE){
    echo "New record created successfully";
  }else{
    echo "Error: ".$sql."<br>".$conn->error;
  }
  $mydir = "../projects/".$name;
  if(@mkdir($mydir, 0777)) {
    if(is_dir($mydir)) {
        @chmod($mydir, 0777);
        echo "${mydir} 디렉토리를 생성하였습니다.";
    }
  }
  else {
    echo "${mydir} 디렉토리를 생성하지 못했습니다.";
  }
  $conn->close();
?>
