<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {  
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"]) . " Bytes<br>";

  move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);

  echo "File Stored As: " . $_FILES["file"]["name"];
  }  
?> 

<a href="existingcourse.php">Back</a>