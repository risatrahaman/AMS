<?php
    
    require_once("dbconnect.php");
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $cid = $_SESSION['cid'];
    $date = date("Y-m-d");

    mysqli_query($conn, "insert into feedback(cid, feed_date, description) values('$cid', '$date', '$feedback')");

    echo "We have received your feedback. Thank you $name!";

?>