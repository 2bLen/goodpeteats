<!-- search.inc.php -->
<?php
include_once 'header.inc.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['query'])) {
    $searchQuery = htmlspecialchars($_GET['query']);
    
    $searchResults = performRecipeSearch($searchQuery);

    if (!empty($searchResults)) {
        echo '<h2>Search Results</h2>';
        foreach ($searchResults as $result) {
            echo '<div class="search-result">';
            echo '<h3><a href="recipe.php?id=' . $result['COL 1'] . '">' . $result['COL 5'] . '</a></h3>'; // Assuming COL 1 contains the recipe ID
            echo '<p>Vegan: ' . ($result['COL 3'] === 'T' ? 'Yes' : 'No') . '</p>'; // Assuming COL 3 contains the vegan status
            echo '<p>Type of Meal: ' . $result['COL 4'] . '</p>'; // Assuming COL 4 contains the type of meal
            echo '<p>Ingredients: ' . $result['COL 8'] . ', ' . $result['COL 10'] . ', ' . $result['COL 12'] . ', ' . $result['COL 14'] . ', ' . $result['COL 16'] . ', ' . $result['COL 18'] . ', ' . $result['COL 20'] . ', ' . $result['COL 22'] . ', ' . $result['COL 24'] . ', ' . $result['COL 26'] . ', ' . $result['COL 28'] . ', ' . $result['COL 30'] . ', ' . $result['COL 32'] . ', ' . $result['COL 34'] . '</p>'; // Assuming COL 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34 contain ingredients
            echo '</div>';
        }
    } else {
        echo '<p>No results found.</p>';
    }
} else {
    echo '<p>Invalid search query.</p>';
}

include_once 'footer,inc.php';

function performRecipeSearch($query) {
    include_once 'dbConnect.inc.php'; 
    
    try {
        if (!$conn) {
            die(" oops, connection failed");
        }
        
        $stmt = $conn->prepare("SELECT * FROM recipes WHERE 
            `COL 2` LIKE :pet_type OR 
            `COL 3` LIKE :vegan OR 
            `COL 4` LIKE :meal_type OR 
            `COL 8` LIKE :ingredient OR 
            `COL 10` LIKE :ingredient OR 
            `COL 12` LIKE :ingredient OR 
            `COL 14` LIKE :ingredient OR 
            `COL 16` LIKE :ingredient OR 
            `COL 18` LIKE :ingredient OR 
            `COL 20` LIKE :ingredient OR 
            `COL 22` LIKE :ingredient OR 
            `COL 24` LIKE :ingredient OR 
            `COL 26` LIKE :ingredient OR 
            `COL 28` LIKE :ingredient OR 
            `COL 30` LIKE :ingredient OR 
            `COL 32` LIKE :ingredient OR 
            `COL 34` LIKE :ingredient"); 
        $stmt->bindValue(':pet_type', '%' . $query . '%', PDO::PARAM_STR);
        $stmt->bindValue(':vegan', '%' . $query . '%', PDO::PARAM_STR);
        $stmt->bindValue(':meal_type', '%' . $query . '%', PDO::PARAM_STR);
        $stmt->bindValue(':ingredient', '%' . $query . '%', PDO::PARAM_STR);
        $stmt->execute();
        
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $results;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return []; }}
?>

    <script src="../js/recipes.js"></script>
