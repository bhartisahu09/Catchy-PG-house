<?php include('top_header.php') ?>
<body>
<!--/banner-section-->
		<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
       <div class="header-top">
		    <!-- /header-left -->
		       <?php include('header.php') ?>
		    <!--banner-info-->
			<div class="banner-info">
			   <h1><a href="index.php">Catchy <span class="logo-sub">PG House</span> </a></h1>
			   <h2><span>A HOME AWAY </span> <span>FROM HOME </span></h2>
			     
			</div>
		<!--//banner-info-->	
		</div>
	 </div>

				
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							
							<li>Contact Us</li>
						</ul>
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		<!-- /bottom-banner -->
	<div class="banner-bottom">
	   <div class="container">
          <div class="bottom-form">
			<div class="inner-text">
				
			 <form action="pages/insert_contact_enquiry1.php" method="post">
				<h3>Get Best PG In Your Preferred Location</h3>
					<div class="best-hot">
						<h5>Name</h5>
						<input type="text" class="name" placeholder="Name" name="c_name" required>
					</div>
					<div class="best-hot">
						<h5>Email</h5>
						<input type="text" class="email" placeholder="Email" name="c_email" required>
					</div>
					<div class="best-hot">
						<h5>Number</h5>
						<input type="number" class="number" placeholder="Number" name="c_number" required>
					</div>

					<div class="best-hot">
						<h5>Message</h5>
						<textarea cols="43" rows="6" name="c_message"> </textarea>
					</div>
					<input type="submit" value="Get Details">
				</form>
			</div>
		</div>
	</div>
</div>
	<!-- footer -->
	<?php include('footer.php') ?>