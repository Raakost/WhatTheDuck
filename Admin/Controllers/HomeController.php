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
            $email = trim(htmlspecialchars( $_POST['email']));
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