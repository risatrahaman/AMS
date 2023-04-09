<?php
session_start();

if (!isset($_SESSION['cid'])){
  header("location:../frontend/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/leisurestyles.css">
    <script src="https://kit.fontawesome.com/46cc3b8a50.js" crossorigin="anonymous"></script>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featherweight Airlines Leisure Activities</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <ul>
                <!-- entities according ER -->
                <li><a href="../index.php">Home</a></li>
                <!-- for ticket -->
                <li><a href="#">Book Now</a></li>
                <!-- for flight -->
                <li><a href="#">Flight</a></li>
                <!-- car service -->
                <li><a href="#">Car-Service</a></li>
                <!-- help -->
                <li><a href="./help.php">Help</a></li>
                <!-- coupon -->
                <li><a href="#">Coupon</a></li>
                <!-- leisure -->
                <li><a href="./leisure.php">Leisure</a></li>
                <!-- login -->
                <li><a href="./login.php">Login</a></li>
                <!-- feedback -->
                <li><a href="./feedback.php">Feedback</a></li>
                <!-- signup -->
                <li><a href="./signup.php">Signup</a></li>
                
                <div class="navbar-icon">
                <a href="../backend/logout.php"><img src="./user.png" alt="">
                <?php
                if(!isset($_SESSION)) 
                { 
                    session_start(); 
                } 
                if (isset($_SESSION['cid'])){
                    echo $_SESSION['cid'];
                }
                ?></a>
                <!-- <img src="menu.png" alt=""> -->
                </div>
            
            </ul>
        </div>
        <h1>Featherweight Airlines Leisure Activities</h1>
        <div class="row">
            <div class="service">
                <form action="">
                    <h2>Wi-Fi Access</h2>
                    <p>Stay connected at 35,000 feet with our in-flight Wi-Fi! Enjoy high-speed internet access for just 5$ per hour. Whether you need to catch up on work, browse social media, or watch your favorite TV shows, our Wi-Fi makes it easy. Simply connect to the network and start browsing. Stay connected and productive during your flight with our affordable Wi-Fi service.</p>
                    <button type="submit" class="submit-btn">Select</button>
                </form>
            </div>
            <div class="service">
                <form action="">
                    <h2>Vegetarian</h2>
                    <p>At Featherweight Airlines, we understand and respect our passengers' dietary preferences. That's why we offer delicious vegetarian meals on board, including our popular Vegetable Curry with Rice. This flavorful blend of chickpeas, carrots, onions, and potatoes in a creamy coconut curry sauce is served with steamed rice for a satisfying and delicious meal. Thank you for choosing Featherweight Airlines, and we look forward to serving you</p>
                    <button type="button" class="submit-btn">Select</button>
                </form>    
            </div>
            <div class="service">
                <form action="">
                    <h2>Lounge Access</h2>
                    <p>Upgrade your pre-flight experience with Lounge access. Enjoy a comfortable and quiet space to work or relax, with complimentary Wi-Fi, refreshments, and dedicated staff on hand to assist you. Upgrade your travel experience today</p>
                    <button type="submit" class="submit-btn">Select</button>
                </form>
            </div>
            <div class="service">
                <form action="">
                    <h2>Destination Experiences</h2>
                    <p>Discover Dhaka during your layover with our destination experiences. Explore the city, sample local cuisine, and immerse yourself in the culture with our tours and activities. For transit passengers with a 12-hour or more layover and those eligible for on-arrival visas, book your destination experience today</p>
                    <button type="submit" class="submit-btn">Select</button>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>