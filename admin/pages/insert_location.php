<?php

require("connection.php");


$loc_city = $_POST["loc_city"];

$loc_pincode = $_POST["loc_pincode"];

$loc_state = $_POST["loc_state"];

$loc_country = $_POST["loc_country"];



$query = "insert into  location_tbl(lcity, lpostal, lstate, lcountry) values('$loc_city', '$loc_pincode', '$loc_state', '$loc_country')";

mysql_query($query);


header('location:../location.php');
?>