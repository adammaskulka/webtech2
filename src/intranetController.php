<?php
class Attachment {
  public $name;
  public $link;

  function __construct(){}

  function create($name, $link)
  {
    $this->name = $name;
    $this->link = $link;
  }
}
class Document{
  public $name;
  public $attachments;

  function __construct(){}

  function create($name)
  {
    $this->name = $name;
  }

  function addAttachment($name, $link)
  {
    if (!isset($this->attachments)) {
        $this->attachments = array();
    }
    $attachment = new Attachment();
    $attachment->create($name, $link);
    array_push($this->attachments, $attachment);
  }
}

function addDocument($name, $type){
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO dokuments (name, type) VALUES (?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $name, $type);//i - integer d - double s - string b - BLOB

  $stmt->execute();
}
function getAllDocumentsByType($type){
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT dokuments.name, attachments.name, attachments.link FROM attachments INNER JOIN  dokuments ON attachments.fk_documents = dokuments.id WHERE dokuments.type = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $type);
  $stmt->execute();

  $stmt->store_result();
  $nameDocument = null; $nameAttachment = null; $link = null;
  $stmt->bind_result($nameDocument,$nameAttachment,$link);

  $documents = array();
  while ($stmt->fetch()) { // For each row
    if(!isset($documents[$nameDocument])){
      $document = new Document();
      $document->create($nameDocument);
      $documents[$nameDocument] = $document;
    }
    $documents[$nameDocument]->addAttachment($nameAttachment,$link);
  }
  return $documents;
}
?>
