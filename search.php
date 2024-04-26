<!-- search.php -->

<?php
include_once 'includes/header.php';

if (isset($_GET['query'])) {
  $searchQuery = htmlspecialchars($_GET['query']);
    
  $searchResults = performRecipeSearch($searchQuery);

  if (!empty($searchResults)) {
  echo '<h2>Search Results</h2>';
  foreach ($searchResults as $result) {
  echo '<div class="search-result">';
  echo '<h3>' . $result['name'] . '</h3>';
  echo '<p>' . $result['instructions'] . '</p>';
  echo '</div>';}
  } else {
  echo '<p>No results found.</p>';
  }
} else {
  echo '<p>Invalid search query.</p>';
}

include_once 'footer.php';

function performRecipeSearch($query) {
  $allRecipes = json_decode(file_get_contents('recipesCat.json'), true);
  $results = [];

  foreach ($allRecipes['recipes'] as $recipe) {
  if (stripos($recipe['name'], $query) !== false || stripos($recipe['instructions'], $query) !== false) {
  $results[] = $recipe;}}

  return $results;
}
?>
