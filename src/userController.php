<?php
class User{
  public $login;
  public $name;
  public $surname;
  public $roles;

  function __construct(){}

  function create($login, $name, $surname, $roles)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->login = $login;
    $this->roles= $roles;
  }

  function addRole($role)
  {
    if (!isset($this->roles)) {
        $this->roles = array();
    }

    array_push($this->roles, $role);
  }
}

function addUser($user)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
    die("Connection failed: " . $conn->connect_error);
    if ($conn->connect_error) {
  }

  $sql = "INSERT INTO users (login, name, surname) VALUES (?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $user->login, $user->name, $user->surname);//i - integer d - double s - string b - BLOB

  $stmt->execute();

  $stmt->close();
  $conn->close();
}

function addRole($login, $role)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users INNER JOIN roles ON users.id = roles.users_id  WHERE login=? LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $login);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $id2 = null; $id2 = null; $login = null; $name = null; $surname = null; $roles = null;
  $stmt->bind_result($id ,$login, $name, $surname, $id2,$id3, $roles);

  $row = $stmt->fetch();
  $stmt->close();

  $sql = "INSERT INTO roles (users_id, role_name) VALUES (?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ii", $id, $role);//i - integer d - double s - string b - BLOB

  $stmt->execute();
  $stmt->close();


  $conn->close();
}
//DELETE FROM `roles` WHERE `roles`.`id` = 3;

function removeRole($login, $role)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users INNER JOIN roles ON users.id = roles.users_id  WHERE login=? LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $login);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $id2 = null; $id2 = null; $login = null; $name = null; $surname = null; $roles = null;
  $stmt->bind_result($id ,$login, $name, $surname, $id2,$id3, $roles);

  $row = $stmt->fetch();
  $stmt->close();

  $sql = "DELETE FROM roles WHERE roles.users_id = ? AND roles.role = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("is", $id, $role);//i - integer d - double s - string b - BLOB

  $stmt->execute();
  $stmt->close();


  $conn->close();
}

function getUser($login)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users INNER JOIN roles ON users.id = roles.users_id  WHERE login=? LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $login);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $id2 = null; $id2 = null; $login = null; $name = null; $surname = null; $roles = null;
  $stmt->bind_result($id ,$login, $name, $surname, $id2,$id3, $roles);

  $result = array();
  $user = new User();
  while ($stmt->fetch()) { // For each row
    if(!isset($user->login)){
      $user->create($login, $name, $surname, null);
    }
    $user->addRole($roles);
  }
  $stmt->close();
  $conn->close();

  if($user->login == null)
    return null;
  return $user;
}

function getAllUsers(){
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users INNER JOIN roles ON users.id = roles.users_id  WHERE login=? LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $login);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $id2 = null; $id2 = null; $login = null; $name = null; $surname = null; $roles = null;
  $stmt->bind_result($id ,$login, $name, $surname, $id2,$id3, $roles);

  $result = array();

  $users = array();
  while ($stmt->fetch()) { // For each row
    if(!isset($users[$login])){
      $user = new User();
      $user->create($login, $name, $surname, null);
      $users[$login] = $user;
    }
    $users[$login]->addRole($roles);
  }
  $stmt->close();
  $conn->close();

  if($user->login == null)
    return null;
  return $user;
}

?>
