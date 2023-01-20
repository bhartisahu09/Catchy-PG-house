<?php
  session_start();
  $admin = $_SESSION['admin_id'];
  
  if(isset($admin) && $admin !=''){
	  $sql = "select * from admin_tbl where aid = '$admin'";
	  $res = mysql_query($sql);
	  $admin_detail = mysql_fetch_array($res, MYSQL_ASSOC);
  }
  else{
	header('location:login.php');  
  }
?>
<!DOCTYPE html>
<head>
<title>Admin Panel OF  Catchy PG House </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Enquiry" />

<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
 <link href="css/minimal.css" rel="stylesheet">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>