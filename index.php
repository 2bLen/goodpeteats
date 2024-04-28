<!-- index.php -->

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=utf-8');
session_start();

include_once 'includes/header.inc.php'; ?>

<div class="col-sm-8">
<div class="light-box">
<?php
  if (isset($_SESSION["userid"])) {
    echo "<h2> welcome " . $_SESSION["userid"] . "</h2>";}?>

<h2><span style="color: #228DC6"><strong>Welcome to Good Pet Eats</strong></span></h2>  
  <p>We&rsquo;re a community of passionate animal enthusiasts who deeply care about the well-being of pets. United by a profound love for animals, we believe pets deserve the very best.</p>
  <p>Our team understands the significance of natural, homemade meals &mdash; for us &amp; our pets. Investing time into crafting food with wholesome, natural ingredients is a gesture of love and care. We aim to inspire others to embrace the art of preparing nutritious meals for the meaningful menageries surrounding our bodies and lifting our souls.</p>
  <p>Sharing recipes for every pet &mdash; regardless of breed, shape, or size is our goal. Whether you love a loyal dog, a quirky cat, a snuggly snake, a playful hamster, or any other furry, feathery, bumpy or scaly friend, &ldquo;Good Pet Eats&rdquo; is dedicated to bringing homemade, natural and delicious pet recipes to all.</p></div></div>

<div class="col-sm-4"><br>
 <p>Making food at home is a wholesome approach to nutrition. The primary advantage is the ability to control ingredients &mdash; ensuring a well-balanced &amp; nutritional diet.</p>
 <p>Homemade pet food lets pet lovers choose high-quality, fresh ingredients, avoiding artificial additives, preservatives, and fillers commonly found in commercial pet foods. This level of control is particularly crucial for pets with specific dietary restrictions, allergies, or sensitivities &mdash; unique recipes for unique needs.</p>
 <p>Homemade pet meals enhance overall health, potentially leading to improved coat/skin, increased energy levels, and weight management. While store-bought offers convenience, homemade provides a personalized and caring touch that contributes to the overall health &amp; happiness of our cherished animal companions.</p></div>

<?php include_once 'includes/footer.inc.php'; ?>
