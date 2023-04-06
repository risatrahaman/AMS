<?php
    require_once("dbconnect.php");

    $uid = $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $encryptedPass = password_hash($pass, PASSWORD_DEFAULT);

    $userMode = $_POST['userType'];
    
    $result1 = mysqli_query($conn, "select uid from user where uid='$uid'");
    $result2 = mysqli_query($conn, "select email from user where email='$email'");
    

    if ($result1->num_rows != 0){
        header("Location: ../frontend/signup.php?error=Username is already taken");
        exit;
    }
    else if ($result2->num_rows != 0){
        header("Location: ../frontend/signup.php?error=Email already exists");
        exit;
    }
    else{
        mysqli_query($conn, "insert into user values('$uid', '$fname', '$lname', '$phone', '$address', '$email', '$encryptedPass')");
        
        if ($userMode == 'Customer'){
            mysqli_query($conn, "insert into customer values('$uid', 'C-$uid', 0, 'regular')");
        }
        else if ($userMode == 'Admin'){
            mysqli_query($conn, "insert into admin values('$uid', 'A-$uid')");
        }
    }

    header("Location: ../frontend/login.php");

?>