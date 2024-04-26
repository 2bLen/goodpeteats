<?php
include_once 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $recipeName = htmlspecialchars($_POST['recipeName']);
  $ingredients = htmlspecialchars($_POST['ingredients']);
  $instructions = htmlspecialchars($_POST['instructions']);
  $petType = htmlspecialchars($_POST['petType']);

  echo "<p>Thanks! If it passes our Quality Inspection, we'll add it to the database.</p>";
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
    <option value="hamster">Hamster</option>
    <option value="guinea pig">Guinea Pig</option>
    <option value="sugar glider">Sugar Glider</option>
    <option value="goldfish">Goldfish</option>
    <option value="ferret">Ferret</option>
    <option value="parakeet">Parakeet</option>
    <option value="other">Other</option>
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
        <option value="cat">Cat</option>
        <option value="dog">Dog</option>
        <option value="hamster">Hamster</option>
        <option value="guinea pig">Guinea Pig</option>
        <option value="sugar glider">Sugar Glider</option>
        <option value="goldfish">Goldfish</option>
        <option value="ferret">Ferret</option>
        <option value="parakeet">Parakeet</option>
        <option value="other">Other</option>
      </select>
      
      <button type="submit">Submit Recipe</button>
    </form>
  </div>
</div>

<section class="recipe-cards">
  <?php
    $conn = new mysqli('localhost', 'username', 'password', 'your_database');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM recipes WHERE pet = 'cat'");

    while ($row = $result->fetch_assoc()) {
        echo '<div class="recipe-card">';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<ul>';
        foreach (json_decode($row['ingredients'], true) as $ingredient) {
            echo '<li>' . $ingredient . '</li>';
        }
        echo '</ul>';
        echo '<p>' . $row['instructions'] . '</p>';
        echo '<button onclick="addToCart()">Add to Cart</button>';
        echo '</div>';
    }

    $conn->close();
  ?>
</section>

<button onclick="openSubmitRecipeModal()">Submit Recipe</button>

<script>
function addToCart() {
  // Add the recipe to the user's cart
  alert('Recipe added to cart');
}

function openSubmitRecipeModal() {
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
