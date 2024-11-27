<?php

// Class for establishing connection with database
class Connection
{
    const HOST = 'localhost';
    const DB_NAME = 'pabau';
    const USERNAME = 'root';
    const PASSWORD = '';

    protected $connection;

    public function __construct()
    {
        $this->connection = new \PDO(
            'mysql:host=' . self::HOST . ';dbname=' .  self::DB_NAME,
            self::USERNAME,
            self::PASSWORD
        );
    }

    // start the connection
    public function getConnection()
    {
        return $this->connection;
    }

    // close connection 
    public function destroyConnection()
    {
        $this->connection = null;
    }
}
