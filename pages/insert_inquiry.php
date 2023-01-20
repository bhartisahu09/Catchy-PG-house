<?php
include('connection.php');

$pname = $_POST['sname'];
$phone = $_POST['sphone'];
$email = $_POST['semail'];
$address = $_POST['saddr'];
$vendor = $_POST['vid'];
$pg = $_POST['pgid'];
$message = $_POST['smessage'];

$city = $_POST['scity'];

$cdate = date('Y/m/d');
$sql = "insert into user_tbl(uname,uemail,uphone,uaddress,ucity) values('$pname','$email','$phone','$address','$city')";
$res = mysql_query($sql);
echo $sql;
$user = mysql_insert_id($con);
echo $user;
$qry = "insert into enquiry_tbl(uid, pgid, vid, edate, emessage, estatus) values('$user','$pg','$vendor','$cdate','$message','New')";
mysql_query($qry);

header('location:../single.php?pid='.$pg.'&message=1');
?>