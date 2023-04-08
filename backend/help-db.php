<?php
    require_once("dbconnect.php");

    session_start();
    $hname = $_GET['hname'];
    $cid = $_SESSION['cid'];

    echo "$cid needs $hname";
?>