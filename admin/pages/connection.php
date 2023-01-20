<?php

  // for connecting php to mysql database

$host = "localhost";  // server name
$user = "root"; //
$pass = "";


$con = mysql_connect($host, $user, $pass);  // for connection

mysql_select_db("pg_db");
?>