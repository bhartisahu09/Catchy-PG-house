<?php include('top_header.php') ?>
<?php
include("pages/connection.php");

if(!empty($_POST['pcity']) && !empty($_POST['pname'])){
	$city = $_POST['pcity'];
	$name = $_POST['pname'];
  $qry = "select * from pg_tbl where pcity = '$city' and pname like '%$name%'";
 $res =  mysql_query($qry);
}
else if(!empty($_POST['pgname'])){
	$pname = $_POST['pgname'];
    $qry = "select * from pg_tbl where pname like '%$pname%'";
    $res =  mysql_query($qry);
}
else{
	$qry = "select * from pg_tbl";
     $res = mysql_query($qry);
}

?>
<body>
<!--/banner-section-->
		<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
              <?php include('header.php') ?>
		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index.php">Catchy <span class="logo-sub">PG HOUSE</span> </a></h1>
			    <h2><span>COME LOOK </span> <span>AT THE SELECTION! </span></h2>
				<p>Eye it – try it – buy it!</p>
			     
			</div>
		<!--//banner-info-->	
		</div>
	 </div>

			
			<!-- //get-->
		<!--//banner-section-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li>Search Results</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Search Results</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		    <div class="tips w3l">
				<div class="container">
				 <div class="col-md-8 tips-info">
					<?php
					$num = mysql_num_rows($res);
					if($num > 0){
					while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
						if(!empty($row['pgimage']) && file_exists('images/pg/'.$row['pgimage'])){
							  $img =$row['pgimage'];	
							}
							else{
								$img ="default.jpg";
							}
							
                     echo"<div class='news-grid'>
					    <div class='news-img up'>
						  <a href='single.php?pid=".$row['pid']."'> <img src='images/pg/".$img."' alt='".$row['pname']."' title='".$row['pname']."' class='img-responsive'></a>
						  <span class='price1'>NEW</span>
						</div>
					    <div class='news-text coming'>
						    <h3><a href='single.php?pid=".$row['pid']."'>".$row['pname']."</a></h3>
							
							<p class='news'>".$row['pdescription']."</p>
							<h6><a href='single.php?pid=".$row['pid']."'> ".$row['paddress']."</a></h6>
							<a href='single.php?pid=".$row['pid']."' class='read hvr-shutter-in-horizontal'>View Details</a>
							<ul class='p-t'>
							  <li><a href='single.php?pid=".$row['pid']."'>Photos</a></li>
							  <li><a href='single.php?pid=".$row['pid']."'>Facilities</a></li>
							</ul>
					
						</div>
		
						<div class='clearfix'></div>
					 </div>";	
					}
					}else{
						echo"<h4 style='color:red; border:2px solid #000; border-radius:15px; padding:15px; text-align:center' class='tittle'>No Matching Results Found!!!</h4>";
					}
					?>  
					
				</div>	
			   <?php 
			   			include('sidebar.php');
			   ?>
		<!-- footer -->
	<?php include('footer.php') ?>