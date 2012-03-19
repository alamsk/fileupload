<html>
<body bgcolor="#666600">
<center>
<form action="upload.php"method="POST" enctype="multipart/form-data">
<label for="file">File Name:</label>
<input type="file" name="file" id="file"><br/>
<input type="submit" name="upload" id="upload" value="UPLOAD">
</form>
</center>
</body>
</html>

<?php
  if(isset($_POST['upload'])){
  echo '<pre>';
  print_r($_FILES);
  move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
    //  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
  }
?>