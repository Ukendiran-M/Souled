<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "games"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to fetch the last entered username
$sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// Check if there are any rows in the result
if ($result->num_rows > 0) {
    // Output data of the last entered username
    $row = $result->fetch_assoc();
    $lastUsername = $row["username"];
} else {
    // If no username found, set a default value
    $lastUsername = "No username found";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/home-stylesheet.css">
        <link href="https://fonts.cdnfonts.com/css/wicked-steam" rel="stylesheet">
        <link rel="icon" type="image/png" href="../assets/Images/souled.png" style="width: 150%;">       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
          @import url('https://fonts.cdnfonts.com/css/wicked-steam');
          body{
            font-family: 'Wicked Steam', sans-serif;
            background-color: #1b2838;
          }
          .welcome_header_ctn {
    background: url(https://community.akamai.steamstatic.com/public/images//bg_highlight.png);
    background-position: bottom;
    background-repeat: no-repeat;
    position: relative;
    margin: 0px auto;
    margin-left: 100px;
    text-align: center;
    font-family: "Motiva Sans", "Twemoji", "Noto Sans", Helvetica, sans-serif;
    font-weight: normal;
    height: 173px;
    padding-top: 30px;
    
    color: white;
    margin-top: -300px;
   
}
#subHead {
    text-align: left;
    margin: 0px 0px 0px 16px;
    color: #9099a1;
    font-size: 22px;
    margin-left: 180px;
}
#hello {
    text-align: left;
    margin: 8px 0px 0px 12px;
    font-size: 48px;
    color: #fff;
    margin-left: 180px;
    font-weight: bold;
}
#description {
    margin-top: 40px;
    font-weight: normal;
    text-align: left;
    width: 650px;
    padding-right: 80px;
    padding-left: 80px;
    padding-top: 40px;
    padding-bottom: 30px;
    float: left;
    background: -webkit-linear-gradient( top, rgba( 64, 128, 183, 0.4) 5%, rgba( 64, 128, 183, 0.2) 95%);
    background: linear-gradient( to bottom, rgba( 64, 128, 183, 0.4) 5%, rgba( 64, 128, 183, 0.2) 95%);
    box-shadow: 0px 0px 3px 0px rgba(20,20,20,0.75);
    margin-left: 250px;
}
#description h2 {
    font-size: 20px;
}
h2 {
    color: #67c1f5;
    text-decoration: none;
    font-family: "Motiva Sans", "Twemoji", "Noto Sans", Helvetica, sans-serif;
    font-weight: 300;
    font-weight: normal;
    font-size: 18px;
}
h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
#description p {
    font-size: 16px;
    line-height: 22px;
}
p {
    font-size: 13px;
    color: #9099a1;
    margin-top: 2px;
    margin-bottom: 12px;
    padding: 0px;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
#rightTextContainer {
    float: right;
    margin-top: 8px;
    padding-right: 12px;
    text-align: left;
    width: 304px;
    height: 414;
}
h1 {
    font-size: 14px;
    color: #cccccc;
    margin: 0px;
    padding: 0px;
    font-weight: normal;
   font-family: "Motiva Sans", "Twemoji", "Noto Sans", Helvetica, sans-serif;
    font-weight: bold;
}
.btn_medium > span, input.btn_medium {
    padding: 0 15px;
    font-size: 15px;
    line-height: 30px;
}
.btn_border_2px > span {
    border-radius: 3px;
}
.btn_green_white_innerfade > span {
    border-radius: 2px;
    display: block;
    background: #799905;
    background: -webkit-linear-gradient( top, #799905 5%, #536904 95%);
    background: linear-gradient( to bottom, #799905 5%, #536904 95%);
}
.btn_green_white_innerfade {
    border-radius: 2px;
    border: none;
    padding: 1px;
    display: inline-block;
    cursor: pointer;
    text-decoration: none !important;
    color: #D2E885 !important;
    background: #a4d007;
    background: -webkit-linear-gradient( top, #a4d007 5%, #536904 95%);
    background: linear-gradient( to bottom, #a4d007 5%, #536904 95%);
}
  
body.apphub_blue {
    background: #1b2838;
    color: #636363;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
ul {
    list-style-type: disc;
    list-style-position: inside;
}
ul {
    font-size: 12px;
    line-height: 1.5em;
    color: #9099a1;
    text-indent: 0px;
    list-style-position: outside;
    list-style-image: url(https://community.akamai.steamstatic.com/public/images/skin_1/arrow.gif);
    list-style-type: square;
    padding-left: 12px;
    margin: 2px;
}
user agent stylesheet
div {
    display: block;
}
.container-fluid a{
    color: #007bff;
}
.menuitem{
    color: white;
}
body{
    font-family: "Motiva Sans", "Twemoji", "Noto Sans", Helvetica, sans-serif
}
.navlink{
    font-size: 40px;
}

.steam-wallet {
  width: 500px;
  padding: 20px;
  border: 1px solid #ccc;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
  margin-left: 420px;
  margin-top: -30px;
  background-color: #1b2838;
}

.wallet-balance, .view-licenses, .store-preferences {
  margin-top: 20px;
}

.wallet-balance p, .view-licenses p, .store-preferences p {
  margin: 0;
  font-size: 14px;
  color: #666;
}

.wallet-balance button, .store-preferences button {
  margin-top: 10px;
  padding: 5px 10px;
  border: none;
  background-color: #333;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
}

.wallet-balance button:hover, .store-preferences button:hover {
  background-color: #444;
}
.settings-menu {
  width: 150px;
  margin-top: 10px;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
  margin-left: 250px;
}

.settings-menu ul {
  padding: 0;
  list-style: none;
}

.settings-menu li {
  padding-left: 5px;
  background: linear-gradient(to right, #223D5A, transparent);
  color: white;
}

.settings-menu li:last-child {
  border-bottom: none;
}

.settings-menu a {
  text-decoration: none;
  color: white;
  display: block;
  height: 30px;
}

.settings-menu a:hover {
  background-color: #c6d4df;
  width: 100%;

  color: black;
}
.nav_item.active {
   
    position: relative;
    height: 30px;
    width: 100%;

}
.nav_item.inactive{
    color: transparent;
    background-color: transparent;
}
.contact-info {
  width: 500px;
  border: 1px solid #ccc;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
  padding: 20px;
  margin-left: 420px;
}

.contact-info h2 {
  margin: 0;
  font-size: 24px;
  font-weight: normal;
  color: #333;
}

.contact-info ul {
  padding: 0;
  list-style: none;
  margin-top: 20px;
}

.contact-info li {
  padding: 10px 0;
  border-bottom: 1px solid #eee;
}

.contact-info li:last-child {
  border-bottom: none;
}

.contact-info li p {
  margin: 0;
  font-size: 14px;
  color: #666;
}

.contact-info li span {
  font-weight: bold;
}

.contact-info button {
  padding: 5px 10px;
  border: none;
  background-color: #333;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
  margin-top: 10px;
}

.contact-info button:hover {
  background-color: #444;
}
</style>

      </head>
        
        <nav class="d-flex navbar navbar-expand-md darkNav navbar-dark" style="height: 70px;">
            <!-- Toggler/collapsibe Button -->
            <!-- <span class="d-md-none d-block" style="cursor:pointer" onclick="openNav()"><img width="30px" height="30px" src="https://icon-library.com/images/hamburger-menu-icon-png-white/hamburger-menu-icon-png-white-10.jpg"></span> -->

            <div id="myNav" class="overlay" style="color: white;font-size: 20px;">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img width="30px" height="30px" src="https://icon-library.com/images/hamburger-menu-icon-png-white/hamburger-menu-icon-png-white-10.jpg"></a>
              <div class="overlay-content">
                <ul class="navbar-nav pl-4 pt-1">
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="../pages/homed.html" data-toggle="dropdown">
                        Store
                      </a>
                      <div style="background-color:black" class="dropdown-menu">
                        <a class="menuItem" href="../pages/homed.html">Home</a>
                        <a class="menuItem" href="../pages/discoveryqueue.html">Discovery Queue</a>
                        <a class="menuItem" href="../pages/wishlist.html">Wishlist</a>
                        <a class="menuItem" href="../pages/homed.html">Points Shop</a>
                        <a class="menuItem" href="../pages/news.html">News</a>
                        <a class="menuItem" href="../pages/stats.html">Jersey</a>
                      </div>
                    </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../pages/homed.html">Support</a>
                    </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="../pages/homed.html">Account</a>
  
                    <div style="background-color:black" class="dropdown-menu">
                      <a class="menuItem" href="../index.html">Login</a>
                      <a class="menuItem" href="Sign-up.html">Sign Up</a>
                    </div>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="mx-auto bg">
            <a class="float-left" href="home.html"><img
                class="logoBig" src="../assets/Images/souled (1).png" style="width: 150px; position: relative; left: -150px; top: 3px; right: 20px;"></a>
            
            <!--Navbar-->
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="position: relative; left: 300px;">
              <ul class="navbar-nav pt-1">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="../pages/homed.html" data-toggle="dropdown">
                      Store
                    </a>
                    <div style="background-color:black" class="dropdown-menu">
                      <a class="menuItem" href="../pages/homed.html">Home</a>
                      <a class="menuItem" href="../pages/discoveryqueue.html">Discovery Queue</a>
                      <a class="menuItem" href="../pages/wishlist.html">Wishlist</a>
                      <a class="menuItem" href="../pages/homed.html">Points Shop</a>
                      <a class="menuItem" href="../pages/news.html">News</a>
                      <a class="menuItem" href="../pages/stats.html">Jersey</a>
                    </div>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Pages/support.html">Support</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="../pages/homed.html">Account</a>

                  <div style="background-color:black" class="dropdown-menu">
                    <a class="menuItem" href="../index.html">Login</a>
                    <a class="menuItem" href="Sign-up.html">Sign Up</a>
                  </div>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="../Pages/about 1.html">About</a>
                </li>
              </ul>
            </div>
        </div>
        

        <div class="btn-group">
          <button type="button" class="d-none d-md-block btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img width="20px" height="20px" src="../assets/Images/user-profile-circle.png" style="margin-top: -3px; margin-right: 7px;">Profile
          </button>
          <div class="dropdown-menu" style="background-color:#3786c6;  margin-top: 5px; width: fit-content;margin-left: -40px;max-width: 50px;">
              <a class="dropdown-item" href="../Pages/user.php" style="color:black;">View My Profile</a>
              <a class="dropdown-item" href="../Pages/useraccount.php" style="color:black;background-color: white;">Account Details</a>
              <a class="dropdown-item" href="Home.html" style="color: black;">Signout</a>
              <!-- Add more dropdown options as needed -->
          </div>
      </div>
      
        

          </nav>
          <div 
          class="caption">
             <img style="width: 40%; height: 40%; visibility: hidden;" src="../assets/Images/Sale.png" id="Sale">
         </div>
     </div>

     <div id="main" style="position: relative;" class="container-fluid">
       <!--  -->
       <div class="welcome_header_ctn">
        <div class="welcome_header">
            <div id="hello"> <?php echo htmlspecialchars($lastUsername); ?>.</div>
            <div id="subHead">Welcome to The GC Community</div>
        </div>
    </div>

    <div class="settings-menu">
        <ul>
          <li><a href="../pages/Home.html" style="background: linear-gradient(to right, #223D5A, transparent)" class="nav_item active">Account details</a></li>
     
        </ul>
      </div>
    <div class="steam-wallet">
        <h2>STORE & PURCHASE HISTORY</h2>
        <div class="wallet-balance">
          <p>Wallet Balance</p>
          <p>You have no payment methods associated with this account.</p>
          <button>Add a payment method to this account</button>
          <button>View purchase history</button>
        </div>
        <div class="view-licenses">
          <p>0 View licenses and product key activations</p>
        </div>
        <div class="store-preferences">
          <p>Update store preferences</p>
          <p>Country: <span style="color: white;">India</span></p>
          <button>Update store country</button>
        </div>
      </div>
      <br><br>

      <div class="contact-info" style="color: #808891;">
        <h2 style="color:#67c1f5;font-weight: bold;">CONTACT INFO</h2>
        <ul>
          <li>
            <p>Manage Email Preferences</p>
            <p>Email address:  <?php echo htmlspecialchars($lastUsername); ?>@gmail.com<span style="color: white;"></span></p>
            <p>Status: <span style="color: white;">Verified</span></p>
          </li>
          <li>
            <button>Change my email address</button>
          </li>
          <li>
            <button>Add a phone number</button>
            <p>For extra security you can add a phone number to your account. Steam can send important messages to your phone.</p>
          </li>
        </ul>
      </div>    
</html>
