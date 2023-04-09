<?php
    require_once("dbconnect.php");

    # POST variables
    $uid = $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $encryptedPass = password_hash($pass, PASSWORD_DEFAULT);

    $userMode = $_POST['userMode'];
    
    
    $result1 = mysqli_query($conn, "select uid from user where uid='$uid'");
    $result2 = mysqli_query($conn, "select email from user where email='$email'");
    
    # Check if there is any row with same user id
    if ($result1->num_rows != 0){
        header("Location: ../frontend/signup.php?error=Username is already taken");
        exit;
    }
    # Check if there is any row with same user email
    else if ($result2->num_rows != 0){
        header("Location: ../frontend/signup.php?error=Email already exists");
        exit;
    }
    # Otherwise insert the user in the user table
    else{
        mysqli_query($conn, "insert into user values('$uid', '$fname', '$lname', '$phone', '$address', '$email', '$encryptedPass')");
        
        # Either inserting in customer table
        if ($userMode == 'Customer'){
            mysqli_query($conn, "insert into customer values('$uid', 'C-$uid', 0, 'regular')");
        }
        # Or inserting in admin table
        else if ($userMode == 'Admin'){
            mysqli_query($conn, "insert into admin values('$uid', 'A-$uid')");
        }
    }

    # Going to login page after signup
    header("Location: ../frontend/login.php");

?>