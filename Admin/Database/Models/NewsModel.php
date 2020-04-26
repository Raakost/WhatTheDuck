<?php

class NewsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function GetAll()
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM News;");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Exception message - NewsModel: " . $exception->getMessage();
        }
    }
}