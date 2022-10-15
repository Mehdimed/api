<?php

class Model{
  protected $connection = null;

  public function __construct() {
    try {
      $this->connection = new PDO('sqlite:db.sqlite');
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      throw new Exception($e->getMessage());
    }
  }
}