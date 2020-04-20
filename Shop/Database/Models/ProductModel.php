<?php

class ProductModel
{
    private $db;

    /**
     * ProductModel constructor.
     */
    public function __construct()
    {
        $this->db = New DBConnection();
    }

    /**
     * @return array
     */
    public function GetAll()
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT * FROM Product;");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function GetById($id)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM Product WHERE ID = :Id");
            $stmt->bindParam('Id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     *
     * @param $id
     * @return array
     */
    public function GetProductCategories($id)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT P.ID, C.Category_name, C.ID CID FROM Product P 
                        LEFT JOIN Product_category PC ON P.ID = PC.Product_ID
                        LEFT JOIN Category C ON C.ID = PC.Category_ID
                        where P.id = :Id;");
            $stmt->bindParam('Id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     * @param $id
     * @return array
     */
    public function GetProductsByCategoryId($id)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT P.Id, P.Name, P.Price, P.Image FROM Product P 
                        LEFT JOIN Product_category PC ON P.ID = PC.Product_ID
                        LEFT JOIN Category C ON C.ID = PC.Category_ID
                        where C.ID = :Id;");
            $stmt->bindParam('Id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }


}