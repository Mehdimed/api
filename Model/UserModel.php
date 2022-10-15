<?php
// get root path
$root = dirname(__DIR__);
require_once $root . '/Model/Model.php';

class UserModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getUser($id)
  {
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $this->connection->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function getUsers()
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->connection->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}