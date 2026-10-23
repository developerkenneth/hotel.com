<?php
require_once "./vendor/autoload.php";

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


// $username = "<h1>Kenneth</h1>";
// $username = htmlentities($username);
// echo "hello, $username";

// echo htmlspecialchars("&&copy");

// session_start();
// session_destroy();

// $_SESSION['user'] = ['name' => 'kenneth', 'id' => 2];

// var_dump($_SESSION);

// echo bin2hex(random_bytes(32));


// testing guzzle

// $client = new \GuzzleHttp\Client();
// $response = $client->get('http://localhost/hotel.com/rooms/api');

// echo $response->getHeaderLine('content-type');
// echo $response->getBody();


// typical php function for mailing
// mail('developerkenneth9696@gmail.com', 'forgot password', 'here is your new password');


use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Mailtrap\Mime\MailtrapEmail;
use Symfony\Component\Mime\Address;

require __DIR__ . '/vendor/autoload.php';

$apiKey = '62e20e911c514a9fa1e14fb97fa15926';
$mailtrap = MailtrapClient::initSendingEmails(
    apiKey: $apiKey,
);

$email = (new MailtrapEmail())
    ->from(new Address('hello@demomailtrap.co', 'Mailtrap Test'))
    ->to(new Address("developerkenneth9696@gmail.com"))
    ->subject('You are awesome!')
    ->text('umu digital dreams smile')
    ->category('Integration Test');

$response = $mailtrap->send($email);

var_dump(ResponseHelper::toArray($response));
