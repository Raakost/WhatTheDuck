<?php

class HomeController
{
    private $model;

    public function __construct()
    {
        $this->model = new HomeModel();
    }

    /**
     * Get data from db model.
     * Include view to render home page.
     */
    public function Index()
    {
        $companyInfo = $this->model->GetCompanyInfo();
        $businessHours = $this->model->GetBusinessHours();
        require(__DIR__ . "./../Views/Home.php");
    }

    /**
     * Update company info.
     *
     */
    public function UpdateInfo()
    {
        if (isset($_POST['phone']) && ($_POST['email']) && ($_POST['description']) && ($_POST['country'])
            && ($_POST['street']) && ($_POST['zipcode']) && ($_POST['city']) && ($_POST['addressID'])) {
            $email = trim(htmlspecialchars($_POST['email'], ENT_QUOTES));
            $phone = trim(htmlspecialchars($_POST['phone'], ENT_QUOTES));
            $description = trim(htmlspecialchars($_POST['description'], ENT_QUOTES));
            $country = trim(htmlspecialchars($_POST['country'], ENT_QUOTES));
            $street = trim(htmlspecialchars($_POST['street'], ENT_QUOTES));
            $zipcode = trim(htmlspecialchars($_POST['zipcode'], ENT_QUOTES));
            $city = trim(htmlspecialchars($_POST['city'], ENT_QUOTES));
            $addressID = trim(htmlspecialchars($_POST['addressID'], ENT_QUOTES));

            $this->model->UpdateCompanyInfo($email, $phone, $description);

            $this->model->UpdateAddress($country, $street, $zipcode, $city, $addressID);
        }

        if (isset($_POST['businessHours'])) {
            $businessHours = $_POST['businessHours'];
            if (count($businessHours) == 7) {
                foreach ($businessHours as $item) {
                    $ID = trim(htmlspecialchars($item['ID'], ENT_QUOTES));
                    $openAt = trim(htmlspecialchars($item['openAt'], ENT_QUOTES));
                    $closeAt = trim(htmlspecialchars($item['closeAt'], ENT_QUOTES));
                    $this->model->UpdateBusinessHours($ID, $openAt, $closeAt);
                }
            }
        }
        $this->Index();
    }
}