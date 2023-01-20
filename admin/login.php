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
<body>
<div class="log-w3"> 
<div class="w3layouts-main">
  <?php
   if(!empty($_GET['err']) && $_GET['err']==1){
     echo"<h3 style='color:#F00'>Email ID and Password does not exists</h3>";
   }
   ?>
	<h2>Sign In Now</h2>
		<form action="pages/logincheck.php" method="post">
			<input type="email" class="ggg" name="aemail" placeholder="E-MAIL" required>
			<input type="password" class="ggg" name="apass" placeholder="PASSWORD" required>
			<span><input type="checkbox" />Remember Me</span>
			
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		
</div>
</div>
<?php include('footer.php'); ?>
