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
}