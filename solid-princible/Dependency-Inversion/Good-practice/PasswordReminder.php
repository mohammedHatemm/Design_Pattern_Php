<?php

require_once 'DBConnectionInterface.php';

class PasswordReminder
{
  private $dbConnection;

  public function __construct(DBConnectionInterface $dbConnection)
  {
    $this->dbConnection = $dbConnection;
  }

  public function remindPassword()
  {
    $this->dbConnection->connect();
    echo "Reminding password...\n";
  }
}

