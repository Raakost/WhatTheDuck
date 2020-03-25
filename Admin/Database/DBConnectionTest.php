<?php

class DBConnectionTest
{
    function DBConnect()
    {
        $servername = "localhost";
        $username = "jean";
        $password = "123456";
        $db = "DWPTest";

        return $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);


        /*
         try {
             $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);

             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $stmt = $conn->prepare("insert into Product (Name, Description, Price, Image, Category) values ('White-browed owl', 'Public-key reciprocal encryption', 24.67, 'http://dummyimage.com/200x200.jpg/cc0000/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Woodpecker, downy', 'Polarised 5th generation emulation', 17.79, 'http://dummyimage.com/200x200.jpg/ff4444/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Squirrel, antelope ground', 'Profit-focused actuating architecture', 38.94, 'http://dummyimage.com/200x200.jpg/cc0000/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Robin, kalahari scrub', 'Streamlined upward-trending functionalities', 22.22, 'http://dummyimage.com/200x200.jpg/dddddd/000000', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Magnificent frigate bird', 'Business-focused fault-tolerant toolset', 25.29, 'http://dummyimage.com/200x200.jpg/5fa2dd/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Squirrel, antelope ground', 'Assimilated value-added matrix', 35.37, 'http://dummyimage.com/200x200.jpg/5fa2dd/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Long-billed cockatoo', 'Pre-emptive neutral interface', 21.76, 'http://dummyimage.com/200x200.jpg/5fa2dd/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Thomson''s gazelle', 'Persevering analyzing array', 23.46, 'http://dummyimage.com/200x200.jpg/5fa2dd/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Southern hairy-nosed wombat', 'Advanced 24 hour task-force', 29.14, 'http://dummyimage.com/200x200.jpg/cc0000/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Cat, jungle', 'Reduced reciprocal monitoring', 29.04, 'http://dummyimage.com/200x200.jpg/cc0000/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Hippopotamus', 'Operative bi-directional portal', 38.67, 'http://dummyimage.com/200x200.jpg/ff4444/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('North American beaver', 'User-centric tangible function', 21.96, 'http://dummyimage.com/200x200.jpg/cc0000/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Whale, long-finned pilot', 'Seamless executive focus group', 29.5, 'http://dummyimage.com/200x200.jpg/ff4444/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('African wild cat', 'User-friendly client-driven groupware', 27.73, 'http://dummyimage.com/200x200.jpg/5fa2dd/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Racer, blue', 'Realigned disintermediate extranet', 19.44, 'http://dummyimage.com/200x200.jpg/5fa2dd/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Deer, red', 'Fully-configurable web-enabled array', 34.78, 'http://dummyimage.com/200x200.jpg/dddddd/000000', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Puna ibis', 'Inverse background array', 32.88, 'http://dummyimage.com/200x200.jpg/ff4444/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Burrowing owl', 'Total scalable approach', 24.82, 'http://dummyimage.com/200x200.jpg/ff4444/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Herring gull', 'Universal global function', 36.66, 'http://dummyimage.com/200x200.jpg/cc0000/ffffff', null);
                                                     insert into Product (Name, Description, Price, Image, Category) values ('Southern ground hornbill', 'Pre-emptive transitional circuit', 23.13, 'http://dummyimage.com/200x200.jpg/ff4444/ffffff', null);
        ");

             // $stmt = $conn->prepare("INSERT INTO Product(productName, description, price, category, image ) VALUES(:productName, :description, :price, :category, :image)");
             //    $stmt->bindParam(":productName", $productName);
             //    $stmt->bindParam(":description", $description);
             //    $stmt->bindParam(":price", $price);
             //    $stmt->bindParam(":category", $category);
             //    $stmt->bindParam(":image", $image);

             //     $productName = "Donald duck";
             //     $description = "some description";
             //     $price = 39.00;
             //     $category = "Disney";
             //     $image = "donald.jpeg";

             //    $stmt->execute();

         } catch (PDOException $exception) {
             echo "Error: " . $exception->getMessage();
         }
         */
    }

}
