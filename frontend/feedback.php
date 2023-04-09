<?php
session_start();

if (!isset($_SESSION['cid'])){
  header("location:../frontend/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/feedbackstyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,400;1,800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
</head>
<body>
  <div class="container">
    <div class="navbar">
      <ul>
        <!-- entities according ER -->
        <li><a href="#">Book Now</a></li>
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

      
    <h1>Connect with Us</h1>
    
    <p>Thank you for reaching out to us. We appreciate your interest in our services and are here to help. 
      <br>Please don't hesitate to send us your feedback
    </p>
    
    <div class="contact-box">
      <div class="contact-left">
        <h3>Send your feedback</h3>
        
        <form method="post" action="../backend/feeback-db.php">
          <div class="input-row">
            <div class="input-group">
              <label for="">Name</label>
              <input name="name" type="text" placeholder="Your name (Not required)">
            </div>

            <div class="input-group">
              <label for="">email</label>
              <input name="email" type="email" placeholder="Your email (Not required)">
            </div>
          </div>
          
          <br />
          <label for="">Message</label>
          <textarea  name="feedback" rows="5" placeholder="Write your feedback here" required></textarea>
          
          <button type="submit">Send</button>
        
        </form>

        
      </div>
      <!-- 2 different column -->
      <div class="contact-right">
        <h3>Reach us</h3>

        <table>
          <!-- tr=table row -->
          <tr>
            <td>Email:</td>
            <td>featherweight@gmail.com</td>
          </tr>
          <!-- 2nd row -->
          <tr>
            <td>Phone:</td>
            <td>+880 1234 567890</td> 
          </tr>
        </table>
      </div>

    </div>

  </div>
</body>
</html>