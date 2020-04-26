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
            $email = trim(htmlspecialchars($_POST['email']));
            $phone = trim(htmlspecialchars($_POST['phone']));
            $description = trim(htmlspecialchars($_POST['description']));
            $country = trim(htmlspecialchars($_POST['country']));
            $street = trim(htmlspecialchars($_POST['street']));
            $zipcode = trim(htmlspecialchars($_POST['zipcode']));
            $city = trim(htmlspecialchars($_POST['city']));
            $addressID = trim(htmlspecialchars($_POST['addressID']));

            $this->model->UpdateCompanyInfo($email, $phone, $description);

            $this->model->UpdateAddress($country, $street, $zipcode, $city, $addressID);
        }

        if (isset($_POST['businessHours'])) {
            $businessHours = $_POST['businessHours'];
            if (count($businessHours) == 7) {
                foreach ($businessHours as $item) {
                    $ID = trim(htmlspecialchars($item['ID']));
                    $openAt = trim(htmlspecialchars($item['openAt']));
                    $closeAt = trim(htmlspecialchars($item['closeAt']));
                    $this->model->UpdateBusinessHours($ID, $openAt, $closeAt);
                }
            }
        }
        $this->Index();
    }
}