<?php
   define ('SITE_ROOT', realpath(dirname(__FILE__)));
   $uploadfile = SITE_ROOT . '/uploads/' . basename($_FILES['userfile']['name']);
   $document_id = $_POST['Document_id'];
   $link = $_POST['nameF'];
   if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
     echo "File is valid, and was successfully uploaded.\n";
     require('cfg/config.php');
     $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }

     $sql = "INSERT INTO attachments (name,link, fk_documents) VALUES (?, ?, ?)";

     $stmt = $conn->prepare($sql);
     $stmt->bind_param("ssi", basename($_FILES['userfile']['name']),$link, $document_id);//i - integer d - double s - string b - BLOB

     $stmt->execute();
   } else {
      echo "Upload failed";
   }
?>
