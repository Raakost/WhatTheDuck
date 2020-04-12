<?php

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function GetProduct($id)
    {
        $stmt = $this->db->GetConnection()->prepare(
            "SELECT * FROM Products P
                        LEFT JOIN Product_categories PC ON P.ID = PC.Product_ID
                        LEFT JOIN Categories C ON C.ID = PC.Category_ID;
                        WHERE ID = :ID");
        $stmt->bindParam(":ID", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function GetAllProducts()
    {
        $stmt = $this->db->GetConnection()->prepare(
            "SELECT P.ID, P.Name, P.Description, P.Price, P.Image, C.Category_name FROM Products P 
                        LEFT JOIN Product_categories PC ON P.ID = PC.Product_ID
                        LEFT JOIN Categories C ON C.ID = PC.Category_ID;
                        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


