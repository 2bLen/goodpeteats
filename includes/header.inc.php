<!-- header.inc.php -->
<!DOCTYPE html>
<html lang="en">
	
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Good Pet Eats</title>
  <link rel="stylesheet" href="css/gpestyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<header class="header">
  <div class="header-content">
    <div class="logo-container">
      <a href="index.php"><img src="images/goodpeteats.png" alt="logo"></a>
    </div>
    <div class="search">
      <form onSubmit="performSearch(event)"> <!-- Pass event to performSearch -->
        <input type="text" name="query" placeholder="Search">
        <button type="submit"><img src="images/search_icon.png" alt="Search" /></button> <!-- Added search button image -->
      </form>
    </div>
    <div class="login-logout-container">
      <button onClick={this.showLoginModal}><img src="images/btn_login.png" alt="Log in" /></button> <!-- Added login button image -->
      <button onClick={this.logout}><img src="images/btn_logout.png" alt="Log out" /></button> <!-- Added logout button image -->
      <button onClick={this.showSignupModal}><img src="images/btn_signup.png" alt="Sign up" /></button> <!-- Added signup button image -->
    </div>
  </div>
</header>

<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeLoginModal()">&times;</span>
    <form id="loginForm">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="password" placeholder="password">
      <button type="button" onclick="submitLoginForm()">Log in</button>
    </form>
  </div>
</div>

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
  </div>
</div>

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

<div id="root"></div>

<script src="../reactApp/gpe_react.js"></script>
<script src="../reactApp/gpe_react-dom.js"></script>
<script src="../reactApp/gpe_babel.js" type="text/javascript"></script>
<script type="text/babel">
  // Define your React components here
  class Header extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        showModal: false
      };
    }

    showLoginModal = () => {
      this.setState({ showModal: true });
    }

    closeLoginModal = () => {
      this.setState({ showModal: false });
    }

    showSignupModal = () => {
      // Implement logic to show signup modal
    }

    performSearch = (event) => {
      // Implement your search logic here
      event.preventDefault(); // Prevent default form submission behavior
      console.log("Performing search...");
    }

    logout = () => {
      // Implement logout functionality here
      console.log("Logged out");
    }

    render() {
      return (
        <header className="header">
          <div className="header-content">
            <div className="logo-container">
              <a href="index.php"><img src="images/goodpeteats.png" alt="logo" /></a>
            </div>
            <div className="search">
              <form onSubmit={this.performSearch}>
                <input type="text" name="query" placeholder="Search" />
                <button type="submit"><img src="images/search_icon.png" alt="Search" /></button> {/* Added search button image */}
              </form>
            </div>
            <div className="login-logout-container">
              <button onClick={this.showLoginModal}><img src="images/btn_login.png" alt="Log in" /></button> {/* Added login button image */}
              <button onClick={this.logout}><img src="images/btn_logout.png" alt="Log out" /></button> {/* Added logout button image */}
              <button onClick={this.showSignupModal}><img src="images/btn_signup.png" alt="Sign up" /></button> {/* Added signup button image */}
            </div>
          </div>
          {this.state.showModal && <LoginModal closeModal={this.closeLoginModal} />}
        </header>
      );
    }
  }

  ReactDOM.render(<Header />, document.getElementById('root'));
</script>
</body>
</html>