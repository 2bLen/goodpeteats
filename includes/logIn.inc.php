<!-- logn.inc.php (includes) -->

<?php
session_start();

if (isset($_POST["submit"])) {
  require_once 'database.inc.php';
  require_once 'functions.inc.php';

  $username = $_POST["username"];
  $password = $_POST["password"];

  if (emptyInputLogin($username, $password) !== true) {
    header("location: ../login.php?error=emptyinput");
    exit();
  }

  loginUser($conn, $username, $password);
} else {
  header("location: ../login.php");
  exit();
}
?>