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

    $userMode = $_POST['users'];
    
    $result = mysqli_query($conn, "select uid from user where uid='$uid'");
    
    if ($result->num_rows == 0){
        mysqli_query($conn, "insert into user values('$uid', '$fname', '$lname', '$phone', '$address', '$email', '$encryptedPass')");
    
        if ($userMode == 'Customer'){
            mysqli_query($conn, "insert into customer values('$uid', 'C-$uid', 0, 'regular')");
        }
        else{
            mysqli_query($conn, "insert into admin values('$uid', 'A-$uid')");
        }
    }
    else{
        echo "User already exists";
    }
    
    
    echo "It works!\n";

?>