<?php

// don't put html in this file

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'insta';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$raw = htmlspecialchars($_POST["content"]);
if($raw == "")
{
  die("Something went wrong, try again later?");
}

$time = time();
$id = bin2hex(random_bytes(5));


$stmt = $conn->prepare("INSERT INTO posts(`id`, `contents`, `posted`) VALUES (?, ?, ?);");
$stmt->bind_param("ssi", $id, $raw, $time);
$stmt->execute();
$stmt->close();

header("Location: /explore?success=true");
die("OK");