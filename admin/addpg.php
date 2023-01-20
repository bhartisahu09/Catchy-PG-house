<?php include("pages/connection.php") ?>
<?php include("top_header.php"); // to include an external php file ?>


<?php
  
  $qry = "select lcity from location_tbl";
  $res = mysql_query($qry);

  $qry2 = "select lcity from location_tbl";
  $res2 = mysql_query($qry2);
  
  $am = "select * from amenities_tbl";
  $amnity = mysql_query($am);
  
?>



<body>
<section id="container">
<?php include('header.php'); ?> 
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            
            
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ADD NEW PG 
                            
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal" enctype="multipart/form-data" id="signupForm" method="POST" action="pages/insert_pg.php" novalidate>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"> Name : </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="pgname" name="pgname" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3"> Address : </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="pgadress" name="pgadress" rows="3" cols="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">City : </label>
                                        <div class="col-lg-6">
                                            <select name="pgcity" class="form-control">
                                               <option value=""> --- Select City ---</option>
                                                <?php 
                                                  while( $city = mysql_fetch_array($res)){
                                                    echo"<option value='". $city['lcity'] ."'>". $city['lcity'] ."</option>";
                                                  }
                                               ?>
                                            </select>    
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Description : </label>
                                        <div class="col-lg-6"> 
                                            <textarea class="form-control " placeholder="Description" name="pgdescription" ></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Contact : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="number"  min="0"   class="form-control" id="pgcontact" name="pgcontact">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"> Name of Vendor : </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="pgvendor" name="pgvendor" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Contact NO. Of Vendor : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="number"  min="0"   class="form-control" id="vendor_phone" name="vendor_phone">
                                        </div>
                                    </div>

                                     <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Email-ID Of Vendor : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="email" class="form-control" id="vendor_mail" name="vendor_mail">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Address Of Vendor : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="text" class="form-control" id="vendor_addr" name="vendor_addr">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">City Of Vendor : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <select name="vendor_city" class="form-control">
                                               <option value=""> --- Select City ---</option>
                                                <?php 
                                                  while( $city1 = mysql_fetch_array($res2, MYSQL_ASSOC)){
                                                    echo"<option value='". $city1['lcity'] ."'>". $city1['lcity'] ."</option>";
                                                  }
                                               ?>
                                            </select>  
                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Rent Of PG : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="number" min="0"  class="form-control" id="pg_rent" name="pg_rent">
                                        </div>
                                    </div>

                                     <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Size Of PG in BHK : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="number"  min="0"    class="form-control" id="no_room" name="no_room">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Accomodation For : </label>
                                        <div class="col-lg-6 col-sm-9">
                                           <select class="form-control"  name="pgfor">
                                              <option value=""> --- Select ---</option>
                                              <option value="Both"> Both</option>
                                              <option value="Only Boys">Only Boys</option>
                                              <option value="Only Girls">Only Girls</option>
                                              <option value="Only Family">Only Family</option>
                                           </select>
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Type : </label>
                                        <div class="col-lg-6 col-sm-9">
                                           <select class="form-control"  name="pg_type">
                                              <option value=""> --- Select PG Type ---</option>
                                              <option value="Furnished">Furnished</option>
                                              <option value="Semi-Furnished">Semi-Furnished</option>
                                              <option value="Not-Furnished">Not-Furnished</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="newsletter" class="control-label col-lg-3 col-sm-3">Ammenities : </label>
                                        <div class="col-lg-6 col-sm-9">
                                           <?php
										   while($amn = mysql_fetch_array($amnity, MYSQL_ASSOC)){
                                             echo"<input type='checkbox' id='amminity' name='amminity[]' value='". $amn['amtitle']."'> ". $amn['amtitle']."&nbsp&nbsp&nbsp";
										   }
										   ?>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Photos : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="file"  class="form-control" id="photo1" name="photo1">
                                             <input type="file"  class="form-control" id="photo2" name="photo2">
                                             <input type="file"  class="form-control" id="photo3" name="photo3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
</section>
<?php include('footer.php'); ?>
