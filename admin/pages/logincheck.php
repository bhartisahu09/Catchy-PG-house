<?php
  include('connection.php');
  session_start();
  $username = $_POST['aemail'];
  $password = $_POST['apass'];
  
  $sql = "select * from admin_tbl where aemail='$username' and apassword = '$password'";
  $res = mysql_query($sql);
  
  $num = mysql_num_rows($res);
  
  if($num > 0){
	$row = mysql_fetch_array($res, MYSQL_ASSOC);
	$_SESSION['admin_id'] = $row['aid'];
	header('location:../index.php');  
  }
  else{
	  header('location:../login.php?err=1');
	  
  }
?>