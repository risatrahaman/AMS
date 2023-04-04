<?php
    require("dbconnect.php");

    $uid = $_POST['uid'];
    $pass = $_POST['pass'];

    $result = mysqli_query($conn, "select password from user where uid='$uid'");
    
    if ($result->num_rows == 0){
        echo "You don't have an account. Please sign up.";
    }
    else{
        $row = mysqli_fetch_array($result);
        
        if (password_verify($pass, $row[0])){
            echo "Logged In successfully";
        }else{
            echo "Password incorrect";
        }
    }

   echo "It works!\n";
?>