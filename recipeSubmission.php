<!-- recipeSubmission.php -->

<?php
include_once 'includes/header.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $recipeName = trim(htmlspecialchars($_POST['recipeName']));
  $ingredients = trim(htmlspecialchars($_POST['ingredients']));
  $instructions = trim(htmlspecialchars($_POST['instructions']));
  $petType = trim(htmlspecialchars($_POST['petType']));

  $host = 'localhost';
  $username = 'your_username';
  $password = 'your_password';
  $database = 'your_database';
  $table = 'recipes';
  $conn = mysqli_connect($host, $username, $password, $database);

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    $query = "INSERT INTO $table (pet, name, ingredients, instructions) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "ssss", $petType, $recipeName, $ingredients, $instructions);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
      echo "<p>looks good, thanks. we'll post it after review</p>";
    } else {
      echo "<p>gosh, something went wrong, please try again</p>";}

    mysqli_stmt_close($stmt);
    mysqli_close($conn);}
} else {
?>
<form action="recipeSubmission.php" method="post">
  <label for="recipeName">Recipe Name:</label>
  <input type="text" id="recipeName" name="recipeName" required>

  <label for="ingredients">Ingredients:</label>
  <textarea id="ingredients" name="ingredients" rows="4" required></textarea>

  <label for="instructions">Instructions:</label>
  <textarea id="instructions" name="instructions" rows="8" required></textarea>

  <label for="petType">pet</label>
  <select id="petType" name="petType" required>
    <option value="cat"> cat </option>
    <option value="dog"> dog </option>
	<option value="hamster"> hamster </option>
    <option value="guineaPig"> guinea pig </option>
    <option value="sugarGlider"> sugar glider </option>
    <option value="goldfish"> goldfish </option>
    <option value="ferret"> ferret </option>
    <option value="parakeet"> parakeet </option>
</select>
<button type="submit">submit recipe</button>
</form>

<div id="submitRecipe" class="modal">
<div class="modal-content">
  <span class="close" onclick="closeRecipeSubmissionModal()">&times;</span>

<h2>submit recipe</h2>

<form action="recipeSubmission.php" method="post">
  <label for="recipeName">recipe name</label>
  <input type="text" id="recipeName" name="recipeName" required>

  <label for="ingredients">ingredients (up to 9)</label>
  <textarea id="ingredients" name="ingredients" rows="4" required></textarea>

  <label for="instructions">instructions</label>
  <textarea id="instructions" name="instructions" rows="8" required></textarea>

  <label for="petType">pet</label>
  <select id="petType" name="petType" required></select>
      
  <button type="submit">submit recipe for review</button></form>
</div></div>

<script>
function openRecipeSubmissionModal() {
  const modal = document.getElementById('submitRecipe');
  modal.style.display = 'block';}

function closeRecipeSubmissionModal() {
  const modal = document.getElementById('submitRecipe');
  modal.style.display = 'none';}
</script>

<?php } include_once 'includes/footer.inc.php'; ?>
