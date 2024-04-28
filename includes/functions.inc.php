<!-- functions.inc.php -->
<?php
include_once 'includes/dbConnect.inc.php';

function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) {
  return (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat));
}

function invalidUid($username){
  return !preg_match("/^[a-zA-Z0-9]*$/", $username);
}

function invalidEmail($email){
  return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function pwdMatch($pwd, $pwdrepeat){
  return ($pwd !== $pwdrepeat);
}

function uidExists($conn, $username, $email){
  $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$username, $email]);
  $row = $stmt->fetch();
  return ($row !== false);
}

function createUser($conn, $userName, $userEmail, $userUid, $userPwd) {
  $sql = "INSERT INTO users(userName, userEmail, userUid, userPwd) VALUES (?, ?, ?, ?);";
  $stmt = $conn->prepare($sql);
  $hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);
  $stmt->execute([$userName, $userEmail, $userUid, $hashedPwd]);
  header("location: ../signup.php?error=none");
  exit();
}
?>
