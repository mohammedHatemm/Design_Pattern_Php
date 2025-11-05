<?php

require_once 'DBConnectionInterface.php';

class MySQLConnection implements DBConnectionInterface
{
  public function connect()
  {
    echo "Connecting to MySQL database...\n";
  }
}

