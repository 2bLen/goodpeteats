<!-- login.php -->
<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/dbConnect.inc.php';
include_once 'includes/functions.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['loginSubmit'])) {
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);

        if (emptyInputLogin($username, $password)) {
            header("location: login.php?error=emptyinput");
            exit();
        } else {
            loginUser($conn, $username, $password);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/gpestyle.css">
</head>
<body>
    <section class="signup-form">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username/Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="loginSubmit">Log in</button>
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Oops! Please fill in all fields for login.</p>";
            } elseif ($_GET["error"] == "wronglogin") {
                echo "<p>Oops! Incorrect login credentials.</p>";
            }
        }
        ?>
    </section>

    <?php include_once 'includes/footer.inc.php'; ?>
</body>
</html>
