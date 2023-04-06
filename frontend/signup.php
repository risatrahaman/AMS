<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="login&signupstyles.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <!-- <div class="button-box">
                <div id="btn"></div>
               
               <button type="button" class="toggle-btn" onclick="register()">SIGN UP </button>
            </div>-->
            <!-- for signup -->
            <p style="text-align:center"> <?php echo $_GET['error']; ?> </p>
            <form id="register" class="input-group" method="post" action="../backend/signup-db.php">
                <input name="uid" type="text" class="input-field" placeholder="User Name" required>
                <input name="fname" type="text" class="input-field" placeholder="First Name" required>
                <input name="lname" type="text" class="input-field" placeholder="Last Name" required>
                <input name="phone" type="text" class="input-field" placeholder="Phone Number" required>
                <input name="address" type="text" class="input-field" placeholder="Address" required>
                <input name="email" type="email" class="input-field" placeholder="Email" required>
                <input name="pass" type="password" class="input-field" placeholder="Password" required>
                <select name="userType" id="">
                    <option value="Customer">Customer</option>
                    <option value="Admin">Admin</option>
                </select>
                <input type="checkbox" class="check-box" required><span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Sign Up</button>
                <p>Already have an account. <a href="./login.php">Log in</a></p>
            </form>
        </div>

    </div>




</body>
</html>