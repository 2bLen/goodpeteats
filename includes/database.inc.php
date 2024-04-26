<!-- database.inc.php (includes) -->

<?php

$serverName = "localhost";
$dbUserUid = "root";
$dbPwd = "";
$dbName = "testing";

$conn = mysqli_connect($serverName, $dbuserUid, $dbPwd, $dbName);

if (!$conn){
  die("failed connection: " . mysqli_connect_error());}
