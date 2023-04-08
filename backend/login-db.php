<?php
    require("dbconnect.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    # User exists?
    $result1 = mysqli_query($conn, "select uid, password from user where email='$email'");
    $row1 = mysqli_fetch_array($result1);
    
    # For customer
    $result2 = mysqli_query($conn, "select cid from customer where uid='$row1[0]'");
    $customer = mysqli_fetch_array($result2);

    # For admin
    $result3 = mysqli_query($conn, "select aid from admin where uid='$row1[0]'");
    $admin = mysqli_fetch_array($result3);

    if ($result1->num_rows == 0){
        header("location:../frontend/login.php?error=User not found");
        exit;
    }
    else{
        if (password_verify($pass, $row1[1])){
            
            session_start();

            if (!empty($customer[0])){
                $_SESSION['cid'] = $customer[0];
            }
            else if (!empty($admin[0])){
                $_SESSION['aid'] = $admin[0];
            }
            
            header("location:../index.php");
        }else{
            header("location:../frontend/login.php?error=Password incorrect");
        }
    }
?>