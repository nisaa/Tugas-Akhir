<?php
namespace App;

use PDO;

class Connector
{
    private $driver;
    private $host;
    private $database;
    private $username;
    private $password;

    public $db = null;

    public function __construct($driver, $host, $username, $password)
    {
        $this->driver = $driver;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function setDatabase($database)
    {
        $this->database = $database;
    }

    public function connect()
    {
        $dsn = $this->driver . ':dbname=' . $this->database . ';host=' . $this->host;

        $this->db = new PDO($dsn, $this->username, $this->password);
    }
}
