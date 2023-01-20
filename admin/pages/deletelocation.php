<?php

require("connection.php");


$loc_id = $_GET["lid"];

$query = "delete from location_tbl where lid ='$loc_id'";

mysql_query($query);


header('location:../location.php');
?>