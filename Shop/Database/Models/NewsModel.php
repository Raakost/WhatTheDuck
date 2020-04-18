<?php

class NewsModel
{
    private $db;

    /**
     * HomeModel constructor.
     */
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function GetAll()
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT  FROM News;");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }

    }

    public function GetLatestThree()
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT * FROM News ORDER BY id DESC LIMIT 3;");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    public function GetById($id)
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT * FROM News WHERE ID=:Id;");
            $stmt->bindParam(":Id", $id);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }


}
