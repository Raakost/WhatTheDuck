<?php

class CheckoutModel
{
    private $db;

    /**
     * CheckoutModel constructor.
     */
    public function __construct()
    {
        $this->db = New DBConnection();
    }

    /**
     * Get products for shopping cart.
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

    public function PlaceOrder($zipcode, $city, $street, $country, $firstname, $lastname, $phone, $email, $cart)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM Zipcode WHERE Zipcode = :Zipcode;");
            $stmt->bindParam(":Zipcode", $zipcode);
            $stmt->execute();

            $zipId = $stmt->fetch(PDO::FETCH_ASSOC)['ID'];

            if (!$zipId) {
                $stmt = $this->db->GetConnection()->prepare(
                    "INSERT INTO Zipcode(Zipcode, City) VALUES(:Zipcode, :City)");
                $stmt->bindParam(":Zipcode", $zipcode);
                $stmt->bindParam(":City", $city);
                $stmt->execute();
                $zipId = $this->db->GetConnection()->lastInsertId();
            } else {
                $stmt = $this->db->GetConnection()->prepare(
                    "UPDATE Zipcode SET City = :City WHERE ID = :zipId ");
                $stmt->bindParam(":zipId", $zipId);
                $stmt->bindParam(":City", $city);
                $stmt->execute();
            }

            $stmt = $this->db->GetConnection()->prepare(
                "INSERT INTO Address(Street, Country, Zipcode_ID)
                            VALUES(:Street, :Country, :Zipcode_ID);");
            $stmt->bindParam(":Street", $street);
            $stmt->bindParam(":Country", $country);
            $stmt->bindParam(":Zipcode_ID", $zipId);
            $stmt->execute();
            $lastAddressId = $this->db->GetConnection()->lastInsertId();

            $stmt = $this->db->GetConnection()->prepare(
                "INSERT INTO Customer(Firstname, Lastname, Phone, Email, Address_ID)
                            VALUES(:Firstname, :Lastname, :Phone, :Email, :Address_ID);");
            $stmt->bindParam(":Firstname", $firstname);
            $stmt->bindParam(":Lastname", $lastname);
            $stmt->bindParam(":Phone", $phone);
            $stmt->bindParam(":Email", $email);
            $stmt->bindParam(":Address_ID", $lastAddressId);
            $stmt->execute();
            $lastCustomerId = $this->db->GetConnection()->lastInsertId();

            $stmt = $this->db->GetConnection()->prepare(
                "INSERT INTO Shop_order(Customer_ID, IsShipped, OrderDate)
                            VALUES(:Customer_ID, 0, NOW());");
            $stmt->bindParam(":Customer_ID", $lastCustomerId);
            $stmt->execute();
            $lastOrderId = $this->db->GetConnection()->lastInsertId();

            foreach ($cart as $key => $value) {
                $stmt = $this->db->GetConnection()->prepare(
                    "INSERT INTO Product_order(Order_ID, Product_ID, Quantity)
                            VALUES(:Order_ID, :Product_ID, :Quantity);");
                $stmt->bindParam(":Order_ID", $lastOrderId);
                $stmt->bindParam(":Product_ID", $key);
                $stmt->bindParam(":Quantity", $value);
                $stmt->execute();
            }

        } catch (PDOException $exception) {
            echo "Exception message - Checkout model: " . $exception->getMessage();
        }

    }
}