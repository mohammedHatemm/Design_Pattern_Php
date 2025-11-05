<?php

require_once 'MySQLConnection.php';

class PasswordReminder
{
  private $dbConnection;

  public function __construct()
  {
    $this->dbConnection = new MySQLConnection(); // Direct dependency
  }

  public function remindPassword()
  {
    $this->dbConnection->connect();
    echo "Reminding password...\n";
  }
}

