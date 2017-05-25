<?php

class Shop{
  public $id;
  public $text;
  public $header;

  function __construct(){}

  function create($id, $text, $header)
  {
    $this->id = $id;
    $this->text = $text;
    $this->header= $header;
  }
}

function addShop($text, $header)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO shop (text, header) VALUES (?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $text, $header);//i - integer d - double s - string b - BLOB

  $stmt->execute();

}

function removeShop($id)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM shop WHERE shop.id = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);//i - integer d - double s - string b - BLOB

  $stmt->execute();
  $stmt->close();
  $conn->close();
}

function updateShop($shop)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE shop SET text = ?, header = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssi", $shop->text, $shop->header, $shop->id);
  $stmt->execute();
}

function getAllShop(){
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM shop";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $text = null; $header = null;
  $stmt->bind_result($id ,$text, $header);

  $shops = array();
  while ($stmt->fetch()) { // For each row
      $shop = new Shop();
      $shop->create($id, $text, $header);
      array_push($shops, $shop);
  }
  return $shops;
}
?>
