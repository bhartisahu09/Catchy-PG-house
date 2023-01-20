<?php

require("connection.php");

$c_id=$_GET['cid'];

$query ="delete from contact_tbl where cid='$c_id'";

mysql_query($query);

header('location:../contact_enquiry.php');

?>