<?php

class DBConnection
{
    private $pdo;
    static private $instance;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(DSN, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Exception message - Database connection: " . $exception->getMessage();
        }
    }

    public static function GetInstance()
    {
        if (!self::$instance) {
            self::$instance = new DBConnection();
        }
        return self::$instance;
    }

    public function GetConnection()
    {
        return $this->pdo;
    }
}