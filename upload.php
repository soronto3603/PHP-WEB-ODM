<?php
$project_name=$_POST['projN'];

// 설정
$uploads_dir = './projects';
$allowed_ext = array('jpg','jpeg','png','gif','zip','JPG');
include('dblib.php');
// 변수 정리
for($i=0;$i<count($_FILES['myfile']['name']);$i++){
  $name=$_FILES['myfile']['name'][$i];
  $error=$_FILES['myfile']['name'][$i];
  $ext=array_pop(explode('.',$name));
  if($error != UPLOAD_ERR_OK){
    switch($error){
      case UPLOAD_ERR_INI_SIZE:
  		case UPLOAD_ERR_FORM_SIZE:
  			echo "파일이 너무 큽니다. ($error)";
  			break;
  		case UPLOAD_ERR_NO_FILE:
  			echo "파일이 첨부되지 않았습니다. ($error)";
  			break;
  		default:
  			echo "파일이 제대로 업로드되지 않았습니다. ($error)";
    }
    exit;
  }

  echo $path = "./projects/$project_name/images";
  if(@mkdir($path, 0777)) {
    if(is_dir($path)) {
        @chmod($path, 0777);
        echo "${path} 디렉토리를 생성하였습니다.";
    }
  }
  else {
    echo "${path} 디렉토리를 생성하지 못했습니다.";
  }
  echo "$uploads_dir/$name/$project_name<br>";
  echo "$uploads_dir/$project_name/images/$name<br>";
  if(!move_uploaded_file( $_FILES['myfile']['tmp_name'][$i], "$uploads_dir/$project_name/images/$name")){
    //die("fail");
  }
  include("db/insertImage.php");
  echo "$uploads_dir/$project_name/images/$name";
  echo $_POST['projectNo'];
  insertImage("$uploads_dir/$project_name/images/$name",$_POST['projectNo']);
  echo "<h2>파일 정보</h2>
  	<ul>
  		<li>파일명: $name</li>
  		<li>확장자: $ext</li>
  		<li>파일형식: {$_FILES['myfile']['type']}</li>
  		<li>파일크기: {$_FILES['myfile']['size']} 바이트</li>
  	</ul>";
}
echo "<script>location.replace('http://202.31.147.199/WebDroneMap/imagesView.php')</script>";
?>
