<?php include('top_header.php') ?>
<?php
include('pages/connection.php');
$pg = $_GET['pid'];
$qry = "select * from pg_tbl inner join vendors_tbl on vendors_tbl.vid=pg_tbl.pgvendor  where pid = '$pg'";
$res= mysql_query($qry);

$row = mysql_fetch_array($res,MYSQL_ASSOC);


$sql = "select * from pg_amminity where pg_id = '$pg'";
$am = mysql_query($sql);



$sql2 = "select * from images_tbl where mpg = '$pg'";
$pics = mysql_query($sql2);
$images = mysql_fetch_array($pics, MYSQL_ASSOC);
?>
<body>
<!--/banner-section-->
		<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
       <div class="header-top">
		    <!-- /header-left -->
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
<!-- discounts-->
			
			
				
			</div>
			<!-- //get-->
		<!--//banner-section-->
		<!--/breadcrumb-->
		    <div class="service-breadcrumb w3-agile">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li><?php echo $row['pname']?></li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3><?php echo $row['pname']?></h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		<div class="single w3ls">
		<div class="container">
          <?php
		    if(!empty($_GET['message']) &&  $_GET['message'] == 1){
                echo"<h4 style='color:green; border:2px solid #000; border-radius:15px; padding:15px; text-align:center' class='tittle'>Inquiry Successfully Submitted!! We will contact you soon.</h4>";
			}
			?>
			<div class="col-md-8 single-left">
               
				<div class="sample1">
					<div class="carousel" style="height: 341px;">
						<ul>
							<?php
							$num = mysql_num_rows($pics);
					
							if($num > 0){
							   echo"<li> <img src='images/pg/".$images['mfile']."' alt=''></li>";
							   echo"<li> <img src='images/pg/".$images['mfile2']."' alt=''></li>";
							   echo"<li> <img src='images/pg/".$images['mfile3']."' alt=''></li>";
							    echo"<li> <img src='images/pg/".$images['mfile2']."' alt=''></li>";

							}
							else{
								 echo"<li> <img src='images/pg/default.jpg' alt=''></li>";
							}
							   ?>
							
					
                    	</ul>
						<div class="controls">
							<div class="prev"></div>
							<div class="next"></div>
						</div>
					</div>
					<div class="thumbnails">
						<ul>
							<?php
							  if($num > 0){
							   echo"<li> <img src='images/pg/".$images['mfile']."' alt=''></li>";
							   echo"<li> <img src='images/pg/".$images['mfile2']."' alt=''></li>";
							   echo"<li> <img src='images/pg/".$images['mfile3']."' alt=''></li>";
							   echo"<li> <img src='images/pg/".$images['mfile2']."' alt=''></li>";
							}
							else{
								 echo"<li> <img src='images/pg/default.jpg' alt=''></li>";
							}
							   ?>
						</ul>
					</div>
				</div>
				<div class="single-left2">
					<h3><?php echo $row['pname']?></h3>
                    <ul class="com">
						<li>Price :<a href="#"><?php echo $row['pgrent'] ?> INR</a></li>
						<li>PG Type :<a href="#"><?php echo $row['pgtype'] ?></a></li>
						<li>Size : <a href="#"><?php echo $row['pgsize'] ?> BHK</a></li>
						<li>Accomodation For : <a href="#"><?php echo $row['pgfor'] ?></a></li>
					</ul>
				</div>
				<div class="single-left3">
					<p><?php echo $row['pdescription']?></p>
				</div>
                <h3 style="padding:20px 0px">Facilities Provided By us</h3>
			     <ol class="ammenities">
                 <?php
				 $i = 1;
                   while($amm = mysql_fetch_array($am, MYSQL_ASSOC)){
				     echo "<li><a href=''>".$i.") ".$amm['atitle']."</a></li>";
					 $i++;
				   } 
				   ?>
                 </ol>
            	<div class="single-left4">
					<h4>Share This Post</h4>
					<ul class="social-icons social-icons1">
						<li><a href="#" class="icon icon-border icon-border1 facebook"></a></li>
						<li><a href="#" class="icon icon-border icon-border1 twitter"></a></li>
						<li><a href="#" class="icon icon-border icon-border1 instagram"></a></li>
						<li><a href="#" class="icon icon-border icon-border1 pinterest"></a></li>
					</ul>
				</div>
				<div class="comments agile-info">
					<h4>Owner Details</h4>
					<div class="comments-grid">
						<div class="comments-grid-left">
							<img src="images/avatar5.png" alt=" " class="img-responsive">
						</div>
						<div class="comments-grid-right">
							<h3><a href="#"><?php echo $row['vname'] ?></a></h3>
							<h5><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <?php echo $row['vphone'] ?></h5>
							<p><?php echo $row['vaddress'] ?></p>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			 <div class="contact-form w3-agile">
             <form action="pages/insert_inquiry.php" method="post">
				<h3>Contact Details</h3>
				<div class="name">
					<div class="text name-text">
						<p>Name</p>
					</div>
					<div class="form-data name-form-data">
						
							<input type="text" Name="sname" required>
						
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="email">
					<div class="text email-text">
						<p>Email</p>
					</div>
					<div class="form-data email-form-data">
						
							<input type="email" Name="semail" required>
						
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="phone">
					<div class="text phone-text">
						<p>Phone</p>
					</div>
					<div class="form-data phone-form-data">
						
							<input type="text" Name="sphone" required>
						
					</div>
					<div class="clearfix"></div>
				</div>
                <br><input type="hidden" name="pgid" value="<?php echo $row['pid'] ?>">
                <input type="hidden" name="vid" value="<?php echo $row['vid'] ?>">
                <div class="phone">
					<div class="text phone-text">
						<p>Address</p>
					</div>
					<div class="form-data phone-form-data">
						
							<textarea rows="5" cols="47" Name="saddr" required></textarea>
						
					</div>
					<div class="clearfix"></div>
				</div>

				 <br>

                <div class="phone">
					<div class="text phone-text">
						<p>City</p>
					</div>
					<div class="form-data phone-form-data">
						
							<input type="text" Name="scity" required>
						
					</div>
					<div class="clearfix"></div>
				</div>
				<br>
                  <div class="phone">
					<div class="text phone-text">
						<p>Message</p>
					</div>
					<div class="form-data phone-form-data">
						
							<textarea rows="5" cols="47" Name="smessage" required></textarea>
						
					</div>
					<div class="clearfix"></div>
				</div>
				<br>


				 

				<div class="value-button">
					
							<input type="submit" value="Contact">
					
				</div>

				</form>

					<div class="clearfix"></div>
				</div>
			</div>
			 <?php 
			   			include('sidebar.php');
			   ?>
	<!-- footer -->
	<?php include('footer.php') ?>