<?php

class OrderModel
{
    private $db;

    /**
     * OrderModel constructor.
     */
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function GetOrder($id)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM Shop_order SO
                        WHERE SO.ID = :ID");
            $stmt->bindParam(":ID", $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Exception message - OrderModel model: " . $exception->getMessage();
        }

    }

    /**
     * @return array
     */
    public function GetAllOrders()
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT SO.*, C.Firstname, C.Lastname, Z.Zipcode,
                (SELECT SUM(product_order.Quantity * product.Price)
                FROM product_order
                INNER JOIN product ON product_order.Product_ID = product.ID
                WHERE order_ID = SO.ID) AS TotalPrice FROM shop_order SO
                INNER JOIN Customer C ON SO.Customer_ID = c.ID
                INNER JOIN Address A ON C.Address_ID = A.ID 
                INNER JOIN Zipcode Z ON A.Zipcode_ID = Z.ID;");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Exception message - ProductModel model: " . $exception->getMessage();
        }
    }

    /**
     * @param $id
     */
    public function ShipOrder($id)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "UPDATE Shop_order 
                            SET Shippingdate = NOW(), isShipped = 1
                            WHERE ID=:ID");
            $stmt->bindParam(":ID", $id);
            $stmt->execute();

        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();

        }
    }
}