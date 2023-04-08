<?php
session_start();

if (!isset($_SESSION['cid'])){
  header("location:../frontend/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="hstyles.css">    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
    <title>Help</title>

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
                session_start();
                echo $_SESSION['cid'];
                ?></a>
            </ul>
            <!-- <img src="menu.png" alt=""> -->
        </div>
        
        <h1>Help and Services</h1>

        <h2>How may we help?</h2>
        <form method="get" action="../backend/help-db.php">
            <select name="hname">
                <option value="Lost Baggage">Lost Baggage</option>
                <option value="Change Schedule">Change Schedule</option>
                <option value="Cancel Flight">Cancel Flight</option>
            </select>
            <button type="submit">Request</button>
        </form>

        <h2>Frequently Asked Questions</h2>
        <div class='tab'>
            <input type="radio" name="acc" id="1">
            <label for="1">
                <h2>01</h2>
                <h3>How can I book a flight on your website?</h3>
            </label>
            <div class="content"><p>You can book a flight on our website by selecting the "Book a Flight" tab and entering your travel dates and destination.
                 You can then choose from available flights and enter your passenger information to complete the booking process.</p></div>
        </div>

        <div class='tab'>
            <input type="radio" name="acc" id="2">
            <label for="2">
                <h2>02</h2>
                <h3>Can I make changes to my flight booking?</h3>
            </label>
            <div class="content"><p>Yes, you can make changes to your flight booking by logging into your account and selecting the "Manage Booking" option.
                 From there, you can make changes to your flight dates, times, or seats, as well as add or remove passengers.</p></div>
        </div>

        <div class='tab'>
            <input type="radio" name="acc" id="3">
            <label for="3">
                <h2>03</h2>
                <h3>What should I do if my baggage is lost?</h3>
            </label>
            <div class="content"><p> If your baggage is lost, please report it to our baggage service desk as soon as possible. You can usually find the baggage service desk near the baggage claim area at the airport.
                 Our staff will provide you with a baggage irregularity report and instructions on how to follow up on your lost baggage.</p></div>
        </div>

        <div class='tab'>
            <input type="radio" name="acc" id="4">
            <label for="4">
                <h2>04</h2>
                <h3> What compensation do you offer for lost baggage?</h3>
            </label>
            <div class="content"><p>We understand that lost baggage can be inconvenient and stressful, and we strive to provide fair compensation to affected passengers. Our compensation policy varies depending on the circumstances of the loss and is subject to certain limitations and exclusions.
                 Please contact us through our email for more information.</p></div>
        </div>
        
        <div class='tab'>
            <input type="radio" name="acc" id="5">
            <label for="5">
                <h2>05</h2>
                <h3>What if my flight is delayed or cancelled?</h3>
            </label>
            <div class="content"><p>If your flight is delayed or cancelled,
                 we will make every effort to notify you as soon as possible and provide you with options for rebooking or receiving a refund.</p></div>
        </div>


    </div>
</body>
</html>