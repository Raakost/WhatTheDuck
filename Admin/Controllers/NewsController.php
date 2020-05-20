<?php

class NewsController
{
    private $model;

    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        $this->model = new NewsModel();
    }

    public function Index()
    {
        $news = $this->model->GetAll();
        require(__DIR__ . "./../Views/News.php");
    }

    public function CreateNewsStory()
    {
        if (isset ($_POST['date']) && ($_POST['title']) && ($_POST['text'])) {
            $date = trim(htmlspecialchars($_POST['date'], ENT_QUOTES));
            $title = trim(htmlspecialchars($_POST['title'], ENT_QUOTES));
            $text = trim(htmlspecialchars($_POST['text'], ENT_QUOTES));
            $image = $this->UploadImage();
            $this->model->CreateNewsStory($date, $title, $text, $image);
        } else {
            echo "couldn't create product!";
        }
        $this->Index();
    }

    /**
     * Upload image..
     * @return mixed
     */
    public function UploadImage()
    {
        if ((($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/jpg"))
            && ($_FILES["file"]["size"] < 1000000)) {

            if ($_FILES["file"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br>";
            } else {
                $newFileName = $_FILES["file"]["name"];
                //$newFileName = trim(com_create_guid(), '{}') . '.' . preg_split("/\./", $_FILES["file"]["name"])[1];

                //if (file_exists("../ProductImages/" . $newFileName)) {
                if (file_exists(__DIR__ . "./../../ProductImages/" . $newFileName)) {
                    echo "already exists";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                        //"../ProductImages/" . $newFileName);
                        __DIR__ . "./../../ProductImages/" . $newFileName);
                    return $newFileName;
                }
            }
        } else {
            echo "invalid file!";
        }
    }
}