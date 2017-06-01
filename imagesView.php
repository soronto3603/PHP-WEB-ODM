<html>
<head>
</head>
<body>
  <form enctype="multipart/form-data" action="upload.php" method="post">
    <input name="projN" value="test1" type="hidden">
    <input name="projectNo" value="7" type="hidden">
    <input name="myfile[]" multiple="multiple" type="file">
    <button>Add Images</button>
  </form>
</body>
</html>

<!-- <h3>Art/imageCount : 0
<button onclick="del_project('Art')">Delete</button></h3><form enctype="multipart/form-data" action="upload.php" method="post">
  <input name="projN" value="Art" type="hidden">
  <input name="myfile[]" multiple="multiple" type="file">
  <button>Add Data</button>
</form><button id="run" onclick="download('Art')">Result Download</button><br><button id="run" onclick="objloader('Art')">Result View</button></div> -->
