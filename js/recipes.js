// recipes.js (js)

function closeLoginModal() {
  const modal = document.getElementById('loginModal');
  modal.style.display = 'none';}

function logout() {
    alert("thanks for stopping by");
    window.location.href = 'index.php';}

function showLoginModal() {
    const loginButton = document.getElementById('loginButton');
    const modal = document.getElementById('loginModal');
    modal.style.display = 'block';}

function signup() {
    const username = document.querySelector('input[name="uname"]').value;
    const password = document.querySelector('input[name="psw"]').value; 
    console.log("Username:", username);
    console.log("Password:", password);}

function openRecipeModal(recipeTitle) {
    const modal = document.getElementById('recipeModal');
    modal.style.display = 'block';

const modalContent = modal.querySelector('.modal-content');
    modalContent.innerHTML = `
  <span class="close" onclick="closeRecipeModal()">&times;</span>
  <h2>${recipeTitle}</h2>
  <p>Recipe details for ${recipeTitle} go here...</p>
  <button>Add to Cart</button>
  `;}

let CHECKED = false;
document.addEventListener("pointerdown", (e) => {
  CHECKED = !CHECKED;
  document.documentElement.style.setProperty("--light", CHECKED ? 1 : 0);});

document.addEventListener('DOMContentLoaded', function () {
  const petTypes = ['cat', 'dog', 'parakeet', 'hamster', 'ferret', 'sugar glider', 'goldfish', 'guinea pig'];

petTypes.forEach(petType => {
  fetch(`recipes${petType.charAt(0).toUpperCase() + petType.slice(1)}.json`)
  .then(response => response.json())
  .then(data => {
  const petRecipes = data.recipes.filter(recipe => recipe.pet === petType);
  displayRecipes(petRecipes, petType);})

  .catch(error => console.error(`Error fetching recipes for ${petType}:`, error));    });

  function displayRecipes(recipes, petType) {
  const recipeList = document.getElementById('recipeList');

  recipes.forEach(recipe => {
  const recipeDiv = document.createElement('div');
  recipeDiv.innerHTML = `
  <h2>${petType} Recipe: ${recipe.name}</h2>
  <p><strong>Ingredients:</strong></p>
  <ul>${recipe.ingredients.map(ingredient => `<li>${ingredient}</li>`).join('')}</ul>
  <p><strong>Instructions:</strong></p>
  <p>${recipe.instructions}</p>
  <hr>
  `;
  recipeList.appendChild(recipeDiv);
  });
  }});
