<?php
class Photo{
  public $folder;
  public $title_sk;
  public $title_en;
  public $date;

  function __construct(){}

  function create($folder, $title_sk, $title_en, $date)
  {
    $this->folder = $folder;
    $this->title_sk = $title_sk;
    $this->title_en = $title_en;
    $this->date= $date;
  }
}

function addPhoto($photo)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
    die("Connection failed: " . $conn->connect_error);
    if ($conn->connect_error) {
  }

  $sql = "INSERT INTO photos (folder, title_sk, title_en, date) VALUES (?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $this->folder, $this->title_sk, $this->title_en, $this->date);//i - integer d - double s - string b - BLOB

  $stmt->execute();

  $stmt->close();
  $conn->close();
}

function getAllPhotos(){
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM photos";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $folder = null; $title_sk = null; $title_en = null; $date = null;
  $stmt->bind_result($id ,$folder, $title_sk, $title_en, $date);

  $photos = array();
  while ($stmt->fetch()) { // For each row
    $photo = new Photo();
    $photo->create($folder, $title_sk, $title_en, $date);
    array_push($photos, $photo);
  }
  $stmt->close();
  $conn->close();

  if($photo->login == null)
    return null;
  return $photos;
}

function addVideo($url)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO videos (url) VALUES (?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $url);//i - integer d - double s - string b - BLOB

  $stmt->execute();

  $stmt->close();
  $conn->close();
}

function deleteVideo ($url)
{
  $id = getIdFromVideos($url);

  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM videos WHERE videos.id = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);//i - integer d - double s - string b - BLOB

  $stmt->execute();
  $stmt->close();
  $conn->close();
}

function getIdFromVideos($url){
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM videos WHERE videos.url=? LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $url);
  $stmt->execute();

  $stmt->store_result();
  $id = null;  $url = null;
  $stmt->bind_result($id ,$url);

  $row = $stmt->fetch();
  $stmt->close();
  $conn->close();
  return $id;
}

function getAllVideos(){
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM videos";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $url = null;
  $stmt->bind_result($id ,$url);


  $videos = array();
  while ($stmt->fetch()) { // For each row
    array_push($videos, $url);
  }
  $stmt->close();
  $conn->close();

  if($url == null)
    return null;
  return $videos;
}

?>
