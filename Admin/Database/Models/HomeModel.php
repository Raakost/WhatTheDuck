<?php

class HomeModel
{
    private $db;

    /**
     * HomeModel constructor.
     */
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    /**
     * @return mixed
     */
    public function GetCompanyInfo()
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT * FROM Company_info CI
                        INNER JOIN Addresses AD ON CI.Address_ID = AD.ID
                        INNER JOIN Zipcodes ZI ON AD.Zipcode_ID = ZI.ID;");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     * @return array
     */
    public function GetBusinessHours()
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT DATE_FORMAT(BH.Open_at, '%H:%i') Open_at,
                        DATE_FORMAT(BH.Close_at, '%H:%i') 
                        AS Close_at, BH.ID, WD.Weekday 
                        FROM Business_hours BH INNER JOIN Weekdays WD ON BH.Weekday_ID = WD.ID
                        WHERE Company_info_ID = 1;");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     * @param $email
     * @param $phone
     * @param $description
     */
    public function UpdateCompanyInfo($email, $phone, $description)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "UPDATE Company_info 
                            SET Email = :Email, Phone = :Phone, Description = :Description
                            WHERE ID = 1;");
            $stmt->bindParam(":Email", $email);
            $stmt->bindParam(":Phone", $phone);
            $stmt->bindParam(":Description", $description);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     * @param $country
     * @param $street
     * @param $zipcode
     * @param $city
     * @param $addressID
     */
    public function UpdateAddress($country, $street, $zipcode, $city, $addressID)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM Zipcodes WHERE Zipcode = :Zipcode;");
            $stmt->bindParam(":Zipcode", $zipcode);
            $stmt->execute();

            $zipId = $stmt->fetch(PDO::FETCH_ASSOC)['ID'];
            if (!$zipId) {
                $stmt = $this->db->GetConnection()->prepare(
                    "INSERT INTO Zipcodes(Zipcode, City) VALUES(:Zipcode, :City)");
                $stmt->bindParam(":Zipcode", $zipcode);
                $stmt->bindParam(":City", $city);
                $stmt->execute();
                $zipId = $this->db->GetConnection()->lastInsertId();
            } else {
                $stmt = $this->db->GetConnection()->prepare(
                    "UPDATE Zipcodes SET City = :City WHERE ID = :zipId ");
                $stmt->bindParam(":zipId", $zipId);
                $stmt->bindParam(":City", $city);
                $stmt->execute();
            }

            $stmt = $this->db->GetConnection()->prepare(
                "UPDATE Addresses 
                            SET Street = :Street, Country = :Country, Zipcode_ID = :Zipcode_ID
                            WHERE ID = :Address_ID;");
            $stmt->bindParam(":Street", $street);
            $stmt->bindParam(":Country", $country);
            $stmt->bindParam(":Address_ID", $addressID);
            $stmt->bindParam(":Zipcode_ID", $zipId);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     * @param $ID
     * @param $openAt
     * @param $closeAt
     */
    public function UpdateBusinessHours($ID, $openAt, $closeAt)
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "UPDATE Business_hours 
                            SET Open_at = :Open_at, Close_at = :Close_at
                            WHERE ID=:ID");
            $stmt->bindParam(":ID", $ID);
            $stmt->bindParam(":Open_at", $openAt);
            $stmt->bindParam(":Close_at", $closeAt);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }


}