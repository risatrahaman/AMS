<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="login&signupstyles.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <!-- <div class="button-box">
                <div id="btn"></div>
               <button type="button" class="toggle-btn" onclick="login()">SIGN IN</button>
            </div> -->

            <!-- for login part -->
            <p style="text-align:center"> <?php echo $_GET['error']; ?></p>
            <form id="login" class="input-group" method="post" action="../backend/login-db.php">
                <input name="email" type="email" class="input-field" placeholder="Email" required>
                <input name="pass" type="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box" ><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log In</button>
                <p>Don't have an account. <a href="./signup.php">Click here</a></p>
            </form>
        </div>

    </div>

</body>
</html>