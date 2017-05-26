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

function IsAdmin(){return userFindRole("admin");}
function IsHR(){return userFindRole("hr");}
function IsReporter(){return userFindRole("reporter");}
function IsEditor(){return userFindRole("editor");}
function IsUser(){return userFindRole("user");}

function userFindRole($find)
{
  session_start();
  foreach($_SESSION['user']->roles as $role){
    if(strcmp($role, $find) == 0){
      return true;
    }
  }
  return false;
}

function addUser($user)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO users (login, name, surname) VALUES (?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $user->login, $user->name, $user->surname);//i - integer d - double s - string b - BLOB

  $stmt->execute();

  addRole($user->login, "user");
}

function addRole($login, $role)
{
  $id = getUserId($login);

  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO roles (users_id, role_name) VALUES (?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("is", $id, $role);//i - integer d - double s - string b - BLOB

  $stmt->execute();
}
//DELETE FROM `roles` WHERE `roles`.`id` = 3;

function removeRole($login, $role)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $id = getRoleId($login);

  $sql = "DELETE FROM roles WHERE roles.users_id = ? AND roles.role_name = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("is", $id, $role);//i - integer d - double s - string b - BLOB

  $stmt->execute();
  $stmt->close();
  $conn->close();
}

function getRoleId($login)
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
  return $id;
}

function getUser($login)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users INNER JOIN roles ON users.id = roles.users_id  WHERE login=?";
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

function getUserId($login)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users WHERE login=? LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $login);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $login = null; $name = null; $surname = null;
  $stmt->bind_result($id ,$login, $name, $surname);

  $row = $stmt->fetch();
  return $id;
}

function updateuser($user)
{
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE users SET name=?, surname=? WHERE login=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $user->name, $user->surname, $user->login);
  $stmt->execute();
}

function getAllUsers(){
  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users INNER JOIN roles ON users.id = roles.users_id";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $stmt->store_result();
  $id = null; $id2 = null; $id2 = null; $login = null; $name = null; $surname = null; $roles = null;
  $stmt->bind_result($id ,$login, $name, $surname, $id2,$id3, $roles);

  $users = array();
  while ($stmt->fetch()) { // For each row
    if(!isset($users[$login])){
      $user = new User();
      $user->create($login, $name, $surname, null);
      $users[$login] = $user;
    }
    $users[$login]->addRole($roles);
  }
  return $users;
}

function deleteUser($login)
{
  $user = getUser($login);
  foreach($user->roles as $role){
    removeRole($login, $role);
  }

  require('cfg/config.php');
  $conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM users WHERE users.login = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $login);//i - integer d - double s - string b - BLOB

  $stmt->execute();
  $stmt->close();


  $conn->close();
}
?>
