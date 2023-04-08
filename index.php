<!DOCTYPE html>
<html lang="en">
<head>
  <!-- font link -->
  
  <link rel="stylesheet" href="./frontend/indexstyles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
  
  <title>Home</title>

 
</head>
<body>
  <div class="hero">
    <div class="navbar">
      <ul>
        <!-- entities according ER -->

        <!-- for ticket -->
        <li><a href="#">Book Now</a></li>
        <!-- for flight -->
        <li><a href="#">Flight</a></li>
        <!-- car service -->
        <li><a href="#">Car-Service</a></li>
        <!-- help -->
        <li><a href="./frontend/help.php">Help</a></li>
        <!-- coupon -->
        <li><a href="#">Coupon</a></li>
        <!-- leisure -->
        <li><a href="./frontend/leisure.php">Leisure</a></li>
        <!-- login -->
        <li><a href="./frontend/login.php">Login</a></li>
        <!-- feedback -->
        <li><a href="./frontend/feedback.php">Feedback</a></li>
        <!-- signup -->
        <li><a href="./frontend/signup.php">Signup</a></li>
        
      </ul>
      <!-- logout -->
      <div class="navbar-icon">
        <a href="./backend/logout.php"><img src="./frontend/user.png" alt="">
        <?php
        session_start();
        if (!empty($_SESSION['cid'])){
          echo $_SESSION['cid'];
        }
        else if (!empty($_SESSION['aid'])){
          echo $_SESSION['aid'];
      }
        ?></a>
        <!-- <img src="menu.png" alt=""> -->

      </div>
    </div>

    <div class="banner">
      <div class="left-column">
        <h1>Featherweight<span> Airlines</span></h1>
        <h3>Discover the world<span> with us</span></h3>
        <p>
          Bonjour, Hola, Ni hao, Konnichiwa, Assalamu alaikum, Hello! Welcome to our Destination experiences, where we help you explore the world and create unforgettable memories.
        </p>
        <div class="btn">
          <button type="button" class="book-btn">
            <h2><?php ?></h2>
            <a href="#" class="1">Book Now</a>
          </button>
        </div>
      </div>


      <div class="right-column"> 
        <img src="./frontend/bg2.png" alt="">
      </div>

    </div>
  </div>
</body>
</html>