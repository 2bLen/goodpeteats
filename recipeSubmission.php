<!-- recipeSubmissions.php -->

<?php
include_once 'header.php';

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
      echo "<p>Thanks! If it passes our Quality Inspection, we'll add it to the database.</p>";
    } else {
      echo "<p>Failed to insert the recipe into the database.</p>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
} else {
?>
<form action="recipeSubmission.php" method="post">
  <label for="recipeName">Recipe Name:</label>
  <input type="text" id="recipeName" name="recipeName" required>

  <label for="ingredients">Ingredients:</label>
  <textarea id="ingredients" name="ingredients" rows="4" required></textarea>

  <label for="instructions">Instructions:</label>
  <textarea id="instructions" name="instructions" rows="8" required></textarea>

  <label for="petType">Pet Type:</label>
  <select id="petType" name="petType" required>
    <option value="cat">Cat</option>
    <option value="dog">Dog</option>
  </select>

  <button type="submit">Submit Recipe</button>
</form>

<div id="submitRecipe" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeRecipeSubmissionModal()">&times;</span>
    <h2>Submit Recipe</h2>

    <form action="recipeSubmission.php" method="post">
      <label for="recipeName">Recipe Name:</label>
      <input type="text" id="recipeName" name="recipeName" required>

      <label for="ingredients">Ingredients:</label>
      <textarea id="ingredients" name="ingredients" rows="4" required></textarea>

      <label for="instructions">Instructions:</label>
      <textarea id="instructions" name="instructions" rows="8" required></textarea>

      <label for="petType">Pet Type:</label>
      <select id="petType" name="petType" required>
        <option value="cat">cat</option>
        <option value="dog">dog</option>
        <option value="dog">ferret</option>
		<option value="hamster">hamster</option>
		<option value="guineaPig">guinea pig</option>
		<option value="sugarGlider">sugar glider</option>
 		<option value="goldfish">goldfish</option>
		<option value="ferret">ferret</option>
		<option value="parakeet">parakeet</option>
      </select>
      
      <button type="submit">Submit Recipe</button>
    </form>
  </div>
</div>

<script>
function openRecipeSubmissionModal() {
  const modal = document.getElementById('submitRecipe');
  modal.style.display = 'block';
}

function closeRecipeSubmissionModal() {
  const modal = document.getElementById('submitRecipe');
  modal.style.display = 'none';
}
</script>

<?php
}
include_once 'footer.php';
?>