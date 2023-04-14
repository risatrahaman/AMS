<?php
session_start();

if (!isset($_SESSION['cid'])){
  header("location:../frontend/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/flight-customer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Book Now</a></li>
            <li id="current"><a href="./flight-customer.php">Flight</a></li>
            <li><a href="#">Car-Service</a></li>
            <li><a href="./coupon.php">Coupon</a></li>
            <li><a href="./leisure.php">Leisure</a></li>
            <li><a href="./help.php">Help</a></li>
            <li><a href="./feedback.php">Feedback</a></li>
            <li><a href="./login.php">Login</a></li>
            <li><a href="./signup.php">Signup</a></li>
            <li><a href="../backend/logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Search for a flight</h1>
        <form action="">
            <div id="type">
                <select name="trip-type" id="trip-type">
                    <option value="oneWay">One Way</option>
                    <option value="roundTrip">Round Trip</option>
                </select>
                <select name="passenger" id="passenger">
                    <option value="one">1 Adult</option>
                    <option value="two">2 Adults</option>
                    <option value="three">3 Adults</option>
                    <option value="four">4 Adults</option>
                </select>
                <select name="seat-type" id="seat-type">
                    <option value="economy">Economy</option>
                    <option value="bussiness">Business</option>
                </select>
            </div>
            <div id="fly">
                <select name="from" id="from" required>
                    <option disabled selected hidden>From</option>
                </select>
                <input name="flight-date" type="date" required>
                <select name="to" id="to" required>
                    <option disabled selected hidden>To</option>
                </select>
                <input name="reach-date" type="date" required>
            </div>
            <button type="submit">Book</button>
        </form>
          
        
    </div>
</body>
</html>