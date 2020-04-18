<?php

class ProductModel
{
    private $db;

    /**
     * ProductModel constructor.
     */
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    /**
     * Get a product.
     * @param $id
     * @return mixed
     */
    public function GetProduct($id)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM Products P
                        LEFT JOIN Product_categories PC ON P.ID = PC.Product_ID
                        LEFT JOIN Categories C ON C.ID = PC.Category_ID;
                        WHERE ID = :ID");
            $stmt->bindParam(":ID", $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Exception message - ProductModel model: " . $exception->getMessage();
        }

    }

    /**
     * Get all products.
     * @return array
     */
    public function GetAllProducts()
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT P.ID, P.Name, P.Description, P.Price, P.Image, C.Category_name, C.ID CID FROM Products P 
                        LEFT JOIN Product_categories PC ON P.ID = PC.Product_ID
                        LEFT JOIN Categories C ON C.ID = PC.Category_ID;
                        ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Exception message - ProductModel model: " . $exception->getMessage();
        }
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
            echo "Exception message - ProductModel model: " . $exception->getMessage();
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
            echo "Exception message - ProductModel model: " . $exception->getMessage();
        }

    }

    /**
     * @return array
     */
    public function GetAllCategories()
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM Categories;");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Exception message - ProductModel model: " . $exception->getMessage();
        }
    }

    /**
     * @param $id
     */
    public function DeleteProduct($id)
    {
        try {
            $stmtDeleteCategories = $this->db->GetConnection()->prepare(
                "Delete FROM Product_categories WHERE Product_Id=:Id;");
            $stmtDeleteCategories->bindParam(":Id", $id);
            $stmtDeleteCategories->execute();

            $stmt = $this->db->GetConnection()->prepare(
                "DELETE FROM Products WHERE ID=:Id;");
            $stmt->bindParam(":Id", $id);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo "Exception message - ProductModel model: " . $exception->getMessage();
        }
    }

}