<?php
    require("dbconnect.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $result1 = mysqli_query($conn, "select uid, password from user where email='$email'");
    $row1 = mysqli_fetch_array($result1);
    
    $result2 = mysqli_query($conn, "select cid from customer where uid='$row1[0]'");
    $row2 = mysqli_fetch_array($result2);

    if ($result1->num_rows == 0){
        header("location:../frontend/login.php?error=User not found");
        exit;
    }
    else{
        if (password_verify($pass, $row1[1])){
            
            session_start();
            $_SESSION['cid'] = $row2[0];
            
            header("location:../frontend/login.php?error=Logged In successfully");
        }else{
            header("location:../frontend/login.php?error=Password incorrect");
        }
    }
?>