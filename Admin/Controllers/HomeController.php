<?php

class HomeController
{
    private $model;

    public function __construct()
    {
        $this->model = new Home();
    }

    public function Index()
    {
        $companyInfo = $this->model->GetCompanyInfo();
        $businessHours = $this->model->GetBusinessHours();
        include(__DIR__ . "./../Views/Home.php");
    }

    public function Save()
    {
        echo var_dump($_POST);
        if (isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['description']) && isset($_POST['country']) &&
            isset($_POST['street']) && isset($_POST['zipcode']) && isset($_POST['city']) && isset($_POST['addressID'])) {
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $description = $_POST['description'];
            $country = $_POST['country'];
            $street = $_POST['street'];
            $zipcode = $_POST['zipcode'];
            $city = $_POST['city'];
            $addressID = $_POST['addressID'];

            $this->model->UpdateCompanyInfo($email, $phone, $description);

            $this->model->UpdateAddress($country, $street, $zipcode, $city, $addressID);
        }

        if (isset($_POST['businessHours'])) {
            $businessHours = $_POST['businessHours'];
            if (count($businessHours) == 7) {
                foreach ($businessHours as $item) {
                    $ID = $item['ID'];
                    $openAt = $item['openAt'];
                    $closeAt = $item['closeAt'];
                    $this->model->UpdateBusinessHours($ID, $openAt, $closeAt);
                }
            }

        }
        $this->Index();


    }
}