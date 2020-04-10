<?php

//require(__DIR__ . "./../Database/Constants.php");

class DBConnection
{
    static private $pdo;

    public function __construct()
    {
        if (!self::$pdo) {
            try {
                self::$pdo = new PDO(DSN, DB_USER, DB_PASS);
            } catch (PDOException $exception) {
                echo "db problem: " . $exception->getMessage();
            }
        }
        return self::$pdo;
    }

    public function exec($statement){
        return self::$pdo->exec($statement);
    }

    public function query($statement){
        return self::$pdo->query($statement);
    }
}