<!-- petRecipes.php -->

<?php
// Establish database connection
$conn = new mysqli('localhost', 'username', 'password', 'recipes');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Query recipes table for all recipes
$result = $conn->query('SELECT * FROM recipes');
$recipes = array();

// Fetch recipes and store them in an array
while ($row = $result->fetch_assoc()) {
    $recipes[] = $row;
}

// Close database connection
$conn->close();

// Set response header to JSON
header('Content-Type: application/json');

// Return recipes array as JSON
echo json_encode($recipes);
?>
