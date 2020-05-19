<?php

class CompanyInfoModel
{
    private $db;

    /**
     * CompanyInfoModel constructor.
     */
    public function __construct()
    {
        $this->db = new DBConnection();
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
                        FROM Business_hours BH INNER JOIN Weekday WD ON BH.Weekday_ID = WD.ID
                        WHERE Company_info_ID = 1;");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function GetCompanyInfoById()
    {
        try {
            $stmt = $this->db->GetConnection()->query(
                "SELECT * FROM Company_info CI
                        INNER JOIN Address AD ON CI.Address_ID = AD.ID
                        INNER JOIN Zipcode ZI ON AD.Zipcode_ID = ZI.ID
                        WHERE CI.ID = 1;");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Error has occurred: " . $exception->getMessage();
        }
    }


}