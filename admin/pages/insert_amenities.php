<?php

   require("connection.php");

	$am_description = $_POST['amdescription'];

	$query = "insert into amenities_tbl(amtitle, ampg, amstatus) values('$am_description','','New')";
	mysql_query($query);

	header('location:../amenities.php');




?>