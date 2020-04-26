<?php

class CompanyInfoController
{
    private $model;

    /**
     * CompanyInfoController constructor.
     */
    public function __construct()
    {
        $this->model = new CompanyInfoModel();
    }

    public function Index()
    {
        $info = $this->model->GetCompanyInfoById();
        $businessHours = $this->model->GetBusinessHours();
        require(__DIR__ . "./../Views/PartialViews/Footer.php");
    }


}

