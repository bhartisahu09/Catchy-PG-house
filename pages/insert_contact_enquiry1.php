<?php
require('connection.php');

$ce_name= $_POST['c_name'];

$ce_email= $_POST['c_email'];

$ce_number= $_POST['c_number'];

$ce_msg = $_POST['c_message'];


$query ="insert into contact_tbl(cname, cemail, cphone, cmessage) values('$ce_name', '$ce_email', '$ce_number', '$ce_msg')";

mysql_query($query);


header('location:../contact.php');

?>