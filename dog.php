<!-- dog.php -->

<?php
include_once 'includes/header.inc.php';
include_once 'includes/dbConnect.inc.php';

$recipes = [];
try {
    // Modified the SQL query to include DISTINCT to fetch only unique recipes
    $stmt = $conn->prepare("SELECT DISTINCT * FROM recipes WHERE `COL 2` = 'dog'");
    $stmt->execute();
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$placeholderRecipe = array(
    'image' => 'images/placeholder.jpg',
    'name' => 'Recipe',
    'instructions' => 'Recipes not loading, please try again'
);

if (empty($recipes)) {
    $recipes[] = $placeholderRecipe;
}
?>

<section class="recipe-grid">
    <?php foreach ($recipes as $recipe) : ?>
        <div class="recipe-card">
            <div class="productImage">
                <!-- Modified image source to use COL 6 if available, otherwise use placeholder -->
                <img src="images/<?= isset($recipe['COL 6']) ? $recipe['COL 6'] : $placeholderRecipe['image'] ?>" alt="<?= isset($recipe['COL 5']) ? $recipe['COL 5'] : $placeholderRecipe['name'] ?>">
            </div>
            <h2><?= isset($recipe['COL 5']) ? $recipe['COL 5'] : $placeholderRecipe['name'] ?></h2>
            <p><strong><br>Instructions</strong><br>
                <?= isset($recipe['COL 7']) ? $recipe['COL 7'] : $placeholderRecipe['instructions'] ?></p>
            <ul><br><strong>Ingredients</strong>
                <?php
                for ($i = 8; $i <= 34; $i += 3) {
                    $ingredient = $recipe['COL ' . $i];
                    $size = $recipe['COL ' . ($i + 1)];
                    $unit = $recipe['COL ' . ($i + 2)];

                    if (!empty($ingredient)) {
                        echo "<li>$size $unit $ingredient</li>";
                    }
                }
                ?>
            </ul>
        </div>
    <?php endforeach; ?>
</section>
<p align="right">yay &emsp;</p>

<?php include_once 'includes/footer.inc.php'; ?>
