<!-- hamster.php -->

<?php
include_once 'includes/header.inc.php';
include_once 'includes/dbConnect.inc.php';

$recipes = [];
try {
  $stmt_test = $conn->prepare("SELECT DISTINCT * FROM recipes LIMIT 1");
  $test_success = $stmt_test->execute();
  $recipes_test = $stmt_test->fetchAll(PDO::FETCH_ASSOC);
  if ($test_success) {
    echo "";
  } else {
    echo "Test query failed. 'recipes' table not found or connection error<br>";}
    $stmt = $conn->prepare("SELECT * FROM recipes WHERE `COL 2` = 'hamster'");
    $stmt->execute();
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();}

$placeholderRecipe = array(
  'image' => 'images/placeholder.jpg',
  'name' => ' recipe ',
  'instructions' => 'recipes not loading, please try again');

if (empty($recipes)) {
    $recipes[] = $placeholderRecipe;}?>

<section class="recipe-grid">
  <?php foreach ($recipes as $recipe) : ?>
    <div class="recipe-card">
   <div class="productImage">
    <img src="images/<?= $recipe['COL 6'] ?>" alt="<?= $recipe['COL 5'] ?>"></div>
    <h2><?= isset($recipe['COL 5']) ? $recipe['COL 5'] : $placeholderRecipe['name'] ?></h2>
    <p><strong><br>instructions</strong><br>
      <?= isset($recipe['COL 7']) ? $recipe['COL 7'] : $placeholderRecipe['instructions'] ?></p>
      <ul><br><strong>ingredients</strong>
        <?php
          for ($i = 8; $i <= 34; $i += 3) {
            $ingredient = $recipe['COL ' . $i];
            $size = $recipe['COL ' . ($i + 1)];
            $unit = $recipe['COL ' . ($i + 2)];                
             if (!empty($ingredient)) {
             echo "<li>$size $unit $ingredient</li>";}}?>
</ul></div>
<?php endforeach; ?></section>
<p align="right">yay &emsp;</p>

<?php include_once 'includes/footer.inc.php'; ?>
