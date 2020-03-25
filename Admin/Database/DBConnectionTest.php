<?php

class DBConnectionTest
{

    function DBConnectTest()
    {
        $servername = "localhost";
        $username = "jean";
        $password = "123456";
        $db = "DWPTest";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /* $stmt = $conn->prepare("INSERT INTO Product(productName, description, price, category, image ) VALUES(:productName, :description, :price, :category, :image)");
             $stmt->bindParam(":productName", $productName);
             $stmt->bindParam(":description", $description);
             $stmt->bindParam(":price", $price);
             $stmt->bindParam(":category", $category);
             $stmt->bindParam(":image", $image);

             $productName = "Donald duck";
             $description = "some description";
             $price = 39.00;
             $category = "Disney";
             $image = "donald.jpeg";

             $stmt->execute(); */
        } catch (PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }

}

//DBConnectTest();