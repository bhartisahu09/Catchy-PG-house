
<?php include('top_header.php'); ?>
<?php
  include('pages/connection.php');
  $qry = "select * from pg_tbl inner join vendors_tbl on vendors_tbl.vid = pg_tbl.pgvendor";
  $res = mysql_query($qry);
  
  $loc = "select city from location_tbl";
  $rescity = mysql_query($loc);
?>
<body>
<!--/banner-section-->
	<div id="demo-1" data-zs-src='["images/home/slider1.jpg", "images/home/slider4.jpg", "images/home/slider5.jpg", "images/home/slider3.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		    <!-- /header-->
		          <?php include('header.php') ?>
			  <!--banner-info-->
			<div class="banner-info">
			    <h2><span>A HOME AWAY </span> <span>FROM HOME </span></h2>
				<p>We try our level best to give our paying guests all the facilities as much as possible </p>
			       <form action="details.php" method="post">
					<div class="search-two">
					<select id="country" name="pcity" required class="frm-field required">
						  <option value=""><img src="images/home/house.png" alt=" " class="img-responsive" />Search By Location</option>
                             <?php
							  while($city = mysql_fetch_array($rescity, MYSQL_ASSOC)){ 
                               echo"<option value='". $city['lcity'] ."'>". $city['lcity'] ."</option>";
							  }
						     ?>	
					</select>
				</div>
				

					<input type="submit" value="Find PG">
					<div class="clearfix"></div>
				</form>
			</div>
				<!--//banner-info-->	
		</div>
</div>

<!--//banner-section-->
<!-- Services -->
	<div class="updates-agile">
		<div class="container">
		      <h3 class="tittle">Welcome To Catchy PG House</h3>
		<div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="video-text" aria-labelledby="video-text-tab">
								
								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<img src="images/home/pg11.jpg" alt="" class="img-responsive">
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="about_us.php"> </a></h4>
										<p>We Catchy PG House provide you the experience of a home away from your home by providing a clean, comfortable & friendly environment. It is ideally located in Raipur, Chhattisgarh. Paying Guest Accommodation has become very important these days bearing in mind the rising prices of houses and the rising rents of the rental places. Our Vision is to become the No.1 pg accomodation in India. We Provide Paying Guest Accomodation, Deluxe Rooms, Executive Men’s Hostel from a prime location India. We have LED Television Facility, Hi-Speed Wi-Fi Internet Facility, Laundry Facility, Camera Facility, Separate Lockers Facility, Car Parking Facility, Hot Water Facility, Purified Drinking Water Facility, 24hrs - Water Supply Facility, Security - 24hrs Facility,Air Condition Facility.</p>
										
										</div>
										<div class="clearfix"></div>
									</div>
									
										
								 </div>
								
							</div>
						
						
						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->

	<!-- /slider1 -->
	<div class="slider1"> 
		<div class="arrival-grids"><h3 class="tittle">Suggested PG</h3>			 
			 <ul id="flexiselDemo1">
			  <?php	
                while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
					if(!empty($row['pgimage']) && file_exists('images/pg/'.$row['pgimage'])){
					  $img =$row['pgimage'];	
					}
					else{
						$img ="default.jpg";
					}
					$pgid = $row['pid'];
                 echo"<li>
					 <a href='single.php?pid=$pgid'><img src='images/pg/".$img."' alt='".$row['pname']."' title='".$row['pname']."'/>
					  <div class='caption'>
							<h3><a href='single.php?pid=$pgid'>".$row['pname']."</a></h3>
							<p style='color:#fff'>".$row['paddress']."</p>
							
						</div>
					 </a>
					
				 </li>";
				 }
				?>
				
				</ul>
		  </div>
	  </div>
	<!-- //slider -->
	


	<!-- /bottom-banner -->
	<div class="banner-bottom">
	   <div class="container">
          <div class="bottom-form">
			<div class="inner-text">
				
			 <form action="pages/insert_contact_enquiry.php" method="post">
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