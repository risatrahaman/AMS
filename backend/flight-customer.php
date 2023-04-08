<?php

require("dbconnect.php");

$airport = $_GET['airport'];
$destination = $_GET['destination'];
$date = $_GET['date'];

$result = mysqli_query($conn, "select * from flight f, schedule s, airport p, aircraft c where p.airport_code = '$airport', p.destination = '$destination', s.f_date = '$date'");
if ($result->num_rows == 0){
    header("Location: ../frontend/flight.php?error=No flights available on the selected date");
    exit;
}
else{
    header("Location: ../frontend/booking.php?")
}

?>