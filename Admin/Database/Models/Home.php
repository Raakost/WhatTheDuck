<?php

//include(__DIR__ . "./../Database/DBConnection.php");
class Home
{
    private $db;

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function GetCompanyInfo()
    {
        $stmt = $this->db->query("SELECT * FROM Company_info CI
                                            INNER JOIN Addresses AD ON CI.Address_ID=AD.ID
                                            INNER JOIN Zipcodes ZI ON AD.Zipcode_ID=ZI.ID");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function GetBusinessHours()
    {
        $stmt = $this->db->query("SELECT * FROM Business_hours BH
                                            INNER JOIN Weekdays WD ON BH.Weekday_ID=WD.ID
                                            WHERE Company_info_ID=1 ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}