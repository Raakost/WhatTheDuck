<?php

class NewsModel
{
    private $db;

    /**
     * NewsModel constructor.
     */
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function GetAll()
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT * FROM News ORDER BY ID DESC;");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }

    }

    public function GetLatestFour()
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT * FROM News ORDER BY ID DESC LIMIT 4;");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    public function GetById($id)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM News WHERE ID = :Id;");
            $stmt->bindParam(":Id", $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }
}
