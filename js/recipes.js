// recipes.js

function closeLoginModal() {
  const modal = document.getElementById('loginModal');
  modal.style.display = 'none';
}

function logout() {
  alert("Thanks for stopping by");
  window.location.href = 'index.php';}

function showLoginModal() {
  const loginButton = document.getElementById('loginButton');
  const modal = document.getElementById('loginModal');
  modal.style.display = 'block';
}

function signup() {
  const username = document.querySelector('input[name="uname"]').value;
  const password = document.querySelector('input[name="psw"]').value;
  console.log("Username:", username);
  console.log("Password:", password);
}

function openRecipeModal(recipeTitle) {
  const modal = document.getElementById('recipeModal');
  modal.style.display = 'block';

  const modalContent = modal.querySelector('.modal-content');
  modalContent.innerHTML = `
    <span class="close" onclick="closeRecipeModal()">&times;</span>
    <h2>${recipeTitle}</h2>
    <p>Recipe details for ${recipeTitle} go here...</p>
    <button>Add to Cart</button>`;
}

let CHECKED = false;
document.addEventListener("pointerdown", (e) => {
  CHECKED = !CHECKED;
  document.documentElement.style.setProperty("--light", CHECKED ? 1 : 0);
});

document.addEventListener('DOMContentLoaded', function () {});

function saveRecipe() {
  alert("Recipe saved for future reference.");
}

function performSearch() {
  const query = document.querySelector('input[name="query"]').value;
  console.log("Search query:", query); // Add this line for debugging
  if (query.trim() !== '') { // Check if the query is not empty
    window.location.href = 'search.inc.php?query=' + encodeURIComponent(query);
  } else {
    alert("Please enter a search query."); // Notify the user if the search query is empty
  }
}
