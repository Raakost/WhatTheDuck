<?php

class NewsModel
{
    private $db;

    /**
     * NewsModel constructor.
     */
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    /**
     * @return array
     */
    public function GetAll()
    {
        try {
            $stmt = $this->db->GetConnection()->prepare(
                "SELECT * FROM News;");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Exception message - Cant getall news stories: " . $exception->getMessage();
        }
    }

    /**
     * @param $date
     * @param $title
     * @param $text
     * @param $image
     */
    public function CreateNewsStory($date, $title, $text, $image)
    {
       try {
           $stmt = $this->db->GetConnection()->prepare(
               "INSERT INTO News(Date, Title, Text, Image) VALUES(:Date, :Title, :Text, :Image)");
           $stmt->bindParam(":Date", $date);
           $stmt->bindParam(":Title", $title);
           $stmt->bindParam(":Text", $text);
           $stmt->bindParam(":Image", $image);
           $stmt->execute();
        } catch (PDOException $exception) {
           echo "Exception message - Cant create news story: " . $exception->getMessage();
       }
    }
}