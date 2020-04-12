<?php

class Product
{
    private $db;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    /**
     * @param $id
     * @return mixed
     */
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

    /**
     * @return array
     */
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

    /**
     * @param $name
     * @param $description
     * @param $price
     * @param $image
     * @return string - $newId
     */
    public function CreateProduct($name, $description, $price, $image)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "INSERT INTO Products(Name, Description, Price, Image)
                            VALUES(:Name, :Description, :Price, :Image);");
            $stmt->bindParam(":Name", $name);
            $stmt->bindParam(":Description", $description);
            $stmt->bindParam(":Price", $price);
            $stmt->bindParam(":Image", $image);
            $stmt->execute();

            return $this->db->GetConnection()->lastInsertId();


        } catch (PDOException $exception) {
            echo "Exception message - Product model: " . $exception->getMessage();
        }
    }

    /**
     * @param $productID
     * Update a product with categories.
     */
    public function UpdateProductCategories($productID, $categories)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "DELETE FROM Product_categories WHERE Product_ID = :ProductId ");
            $stmt->bindParam(":ProductId", $productID);
            $stmt->execute();
            foreach ($categories as $category) {
                $stmt = $this->db->GetConnection()->prepare(
                    "INSERT INTO Product_categories(Product_ID, Category_ID) VALUES (:ProductId,:CategoryId)");
                $stmt->bindParam(":ProductId", $productID);
                $stmt->bindParam(":CategoryId", $category);
                $stmt->execute();
            }

        } catch (PDOException $exception) {
            echo "Exception message - Product model: " . $exception->getMessage();
        }

    }

    public function GetAllCategories()
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM Categories;");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Exception message - Product model: " . $exception->getMessage();
        }
    }
}


