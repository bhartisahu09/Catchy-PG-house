<?php

require("connection.php");

$pg_id = $_GET["pid"];

 $query = "delete  from pg_tbl where pid ='$pg_id'";
  mysql_query($query);

header('location:../allpg.php');


?>