<?php
    require("dbconnect.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    echo "It works!\n";
    echo "$email $pass";


?>