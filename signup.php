<!-- signup.php -->


<?php include_once 'header.php';

$signupUsername = '';
$signupEmail = '';
$signupPassword = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signupSubmit'])) {
  $signupUsername = htmlspecialchars($_POST['signupUsername']);
  $signupEmail = htmlspecialchars($_POST['signupEmail']);
  $signupPassword = password_hash($_POST['signupPassword'], PASSWORD_DEFAULT);

  if ($signupUsername && $signupEmail && $signupPassword) {
    echo "<p>Thanks, welcome! $signupUsername!</p>";
  } else {
    echo "<p>drat, that didn't work, please try again</p>";
  }
}
?>

<div id="signupModal" class="modal">
  <div class="modal-content">
  <span class="close" onclick="closeSignupModal()">&times;</span>
  <form id="signupForm" action="signup.php" method="post">
  <label for="signupUsername">Username:</label>
  <input type="text" id="signupUsername" name="signupUsername" required>

  <label for="signupEmail">Email:</label>
  <input type="email" id="signupEmail" name="signupEmail" required>

  <label for="signupPassword">Password:</label>
  <input type="password" id="signupPassword" name="signupPassword" required>

  <button type="submit" name="signupSubmit">sign up</button>
  </form></div>
</div>

<script>
function showSignupModal() {
  const modal = document.getElementById('signupModal');
  modal.style.display = 'block';}

function closeSignupModal() {
  const modal = document.getElementById('signupModal');
  modal.style.display = 'none';}
</script>

<?php include_once 'footer.php'; ?>
