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
                "SELECT * FROM Products;");
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
            $stmt = $this->db->GetConnection()->query(
                "SELECT * FROM Products WHERE ID=:Id;");
            $stmt->bindParam(":Id", $id);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     * @param $prodId
     * @return array
     */
    public function GetProductCategories($prodId)
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT P.ID, C.Category_name, C.ID CID FROM Products P 
                        LEFT JOIN Product_categories PC ON P.ID = PC.Product_ID
                        LEFT JOIN Categories C ON C.ID = PC.Category_ID
                        where P.id=1;");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }
}