<!-- dbConnect.inc.php -->

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "goodpeteats";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
   exit(); }
?>
