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

class Media
{
    public $page;
    public $title_sk;
    public $title_en;
    public $date;
    public $url;
    public $pdf;
    public $photo;

    function __construct()
    {
    }

    /**
     * Media constructor.
     * @param $page
     * @param $title_sk
     * @param $title_en
     * @param $date
     * @param $url
     * @param $pdf
     * @param $photo
     */
    public function create($page, $title_sk, $title_en, $date, $url, $pdf, $photo)
    {
        $this->page = $page;
        $this->title_sk = $title_sk;
        $this->title_en = $title_en;
        $this->date = $date;
        $this->url = $url;
        $this->pdf = $pdf;
        $this->photo = $photo;
    }


}

function deleteMedia($id)
{

    require('cfg/config.php');
    $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");

    $sql = "DELETE FROM media WHERE media.id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);//i - integer d - double s - string b - BLOB

    $stmt->execute();
    $stmt->close();
    $conn->close();
}

function addMedia($media)
{
    require('cfg/config.php');
    $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");

    $sql = "INSERT INTO media (page, title_sk, title_en, date, url, pdf, photo) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $media->page, $media->title_sk, $media->title_en, $media->date, $media->url, $media->pdf, $media->photo);//i - integer d - double s - string b - BLOB

    $stmt->execute();

    $stmt->close();
    $conn->close();
}

function getAllMedia()
{
    require('cfg/config.php');
    $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");

    $sql = "SELECT * FROM media";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt->store_result();
    $id = null;
    $page = null;
    $title_sk = null;
    $title_en = null;
    $date = null;
    $url = null;
    $pdf = null;
    $photo = null;
    $stmt->bind_result($id, $page, $title_sk, $title_en, $date, $url, $pdf, $photo);

    $medias = array();
    while ($stmt->fetch()) { // For each row
        $media = new Media();
        $photo->create($p, $page, $title_sk, $title_en, $date, $url, $pdf, $photo);
        array_push($medias, $media);
    }

    return $medias;
}

function addPhoto($photo)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");

  $sql = "INSERT INTO photos (folder, title_sk, title_en, date) VALUES (?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $photo->folder, $photo->title_sk, $photo->title_en, $photo->date);//i - integer d - double s - string b - BLOB

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
    mysqli_set_charset($conn, "utf8");

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

  return $photos;
}

function addVideo($url)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    mysqli_set_charset($conn, "utf8");

  $sql = "INSERT INTO videos (url) VALUES (?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $url);//i - integer d - double s - string b - BLOB

  $stmt->execute();

  $stmt->close();
  $conn->close();
}

function deletePhoto($folder)
{

    require('cfg/config.php');
    $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");

    $sql = "DELETE FROM photos WHERE photos.folder = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $folder);//i - integer d - double s - string b - BLOB

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
    mysqli_set_charset($conn, "utf8");

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
    mysqli_set_charset($conn, "utf8");

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
    mysqli_set_charset($conn, "utf8");

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
