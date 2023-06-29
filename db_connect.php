<?php
$host = 'localhost';
$db_name = 'restaurant';
$username = 'root';
$password = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
// https://xd.adobe.com/view/6b4b9137-6d12-49e5-8a8a-06ad56377d26-3e18/
?>
