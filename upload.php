<?php
   define ('SITE_ROOT', realpath(dirname(__FILE__)));
   $uploadfile = SITE_ROOT . '/uploads/' . basename($_FILES['subor']['name']);
   echo $_FILES['subor']['name'];
   echo $uploadfile;
   if (move_uploaded_file($_FILES['subor']['tmp_name'], $uploadfile)) {
     echo "File is valid, and was successfully uploaded.\n";
   } else {
      echo "Upload failed";
   }
?>
