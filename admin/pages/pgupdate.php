<?php

require("connection.php");


$loc_city = $_POST["loc_city"];

$loc_pincode = $_POST["loc_pincode"];

$loc_state = $_POST["loc_state"];

$loc_country = $_POST["loc_country"];

$loc_id = $_POST["loc_id"];

$query = "update location_tbl set lcity='$loc_city', lpostal='$loc_pincode', lstate='$loc_state', lcountry='$loc_country' where lid ='$loc_id'";

mysql_query($query);


header('location:../location.php');
?>