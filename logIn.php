<!-- login.php ?? is this needed WITH the includes one?-->

<?php
include_once 'header.php';
?>

<section class="signup-form">
  <h2>Log In</h2>

  <form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username/Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Log in</button>
  </form>

  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Oops! Please fill in all fields.</p>";
    } else if ($_GET["error"] == "wronglogin") {
      echo "<p>Oops! Incorrect login credentials.</p>";
    }
  }
  ?>
</section>

<?php
include_once 'footer.php';
?>