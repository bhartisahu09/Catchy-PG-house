<?php
require("connection.php");

$userid = $_GET['uid'];

 $query = "delete from user_tbl where uid='$userid'";
mysql_query($query);

header('location:../user.php');

?>