<!-- logout.php -->
<?php
session_start();

$_SESSION['validUser'] = false;

session_unset();

session_destroy();

header("Location: index.php");
exit();
?>
