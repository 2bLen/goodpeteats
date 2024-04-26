<!-- petRecipes.php -->

<?php
$conn = new mysqli('localhost', 'username', 'password', 'recipes');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$result = $conn->query('SELECT * FROM recipes');
$recipes = array();

while ($row = $result->fetch_assoc()) {
    $recipes[] = $row;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($recipes);
?>




....CREATE TABLE recipes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pet VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  ingredients TEXT NOT NULL,
  instructions TEXT NOT NULL
);