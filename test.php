<?php

// try {
//     $dsn = "mysql:host=localhost;dbname=hotel_management;";
//     $password = "";
//     $user = "root";
//     $connection = new PDO($dsn, $user, $password, [
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//     ]);
// } catch (\Exception $error) {
//     echo $error->getMessage();
//     die();
// }



// $sql =  "SELECT * FROM `users` WHERE `email` = :email LIMIT 1";
// $stmt = $connection->prepare($sql);
// $stmt->execute(['email' => "true;
// INSERT INTO `users` (`email`, `first_name`, `last_name`, `password`) VALUES ('kay@mail.com', 'kay', 'kay', 'pass')"]);
// $result = $stmt->fetch();

// var_dump($result);


$username = "<h1>Kenneth</h1>";
$username = htmlentities($username);
echo "hello, $username";

echo htmlspecialchars("&&copy");
