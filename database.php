<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "contact_us";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}