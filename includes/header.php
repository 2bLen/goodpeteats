<!-- header.php (includes) -->

<body>
<header class="header">
  <div class="header-content">
  <div class="logo-container">
  <a href="index.php"><img src="images/goodpeteats.png" alt="logo"></a></div>

<div class="search">
  <form action="search.php" method="get">
  <input type="text" name="query" placeholder="Search">
  <button type="submit"></button></form></div>

<div class="login-logout-container">
  <a href="#" onclick="showLoginModal()"><img src="images/btn_login.png" style="width: 80px" alt="Login" id="loginButton"></a>
  <a href="signup.php"><img src="images/btn_signup.png" style="width: 80px" alt="Signup"></a>
  <a href="#" onclick="logout()"><img src="images/btn_logout.png" style="width: 80px" alt="Logout" id="logoutButton"></a></div></div></header>

<div id="loginModal" class="modal">
  <div class="modal-content">
  <span class="close" onclick="closeLoginModal()">&times;</span>
  <form id="loginForm" action="login.php" method="post">
  <input type="text" name="username" placeholder="username">
  <input type="password" name="password" placeholder="password">
  <button type="button" onclick="submitLoginForm()">log in</button></form></div></div>

<div class="dropdown" align="left">
  <button class="dropbtn">pet</button>
  <div class="dropdown-content">
    <a href="cat.php">cat</a>
    <a href="dog.php">dog</a>
    <a href="hamster.php">hamster</a>
    <a href="guineaPig.php">guinea pig</a>
    <a href="sugarGlider.php">sugar glider</a>
    <a href="goldFish.php">goldfish</a>
    <a href="ferret.php">ferret</a>
    <a href="parakeet.php">parakeet</a>
  </div></div>

<div class="container-fluid" align="center">
  <a href="cat.php" class="selected-pet"><img src="images/cat01.png" alt="cat" height="115px"></a>
  <a href="dog.php" class="selected-pet"><img src="images/dog1.png" alt="dog" height="115px"></a>
  <a href="hamster.php" class="selected-pet"><img src="images/hamster1.png" alt="hamster" height="115px"></a>
  <a href="guineaPig.php" class="selected-pet"><img src="images/guinnea1.png" alt="guinea pig" height="115px"></a>
  <a href="sugarGlider.php" class="selected-pet"><img src="images/sugarGlider2.png" alt="sugar glider" height="115px"></a>
  <a href="goldFish.php" class="selected-pet"><img src="images/goldfish.png" alt="goldfish" height="115px"></a>
  <a href="ferret.php" class="selected-pet"><img src="images/ferret1.png" alt="ferret" height="115px"></a>
  <a href="parakeet.php" class="selected-pet"><img src="images/parakeet1.png" alt="parakeet" height="115px"></a>
</div>

<script>
function submitLoginForm() {
  $("#loginForm").submit();}

function showLoginModal() {
  const modal = document.getElementById('loginModal');
  modal.style.display = 'block';}

function closeLoginModal() {
  const modal = document.getElementById('loginModal');
  modal.style.display = 'none';}

function logout() {
  alert("logged out");}
</script>

</body>
</html>
