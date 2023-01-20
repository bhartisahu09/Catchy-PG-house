<?php include("pages/connection.php") ?>
<?php include("top_header.php"); // to include an external php file ?>



<?php
  
  $qry = "select * from location_tbl";
  $res = mysql_query($qry);

 
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
                           ADD NEW LOCATION
                            
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="POST" action="pages/insert_location.php" novalidate>
                                    
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">City : </label>
                                        <div class="col-lg-6">
                                             <input class="form-control" name="loc_city" placeholder="Enter City" ></input>


                                            
                                               
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Pin Code : </label>
                                        <div class="col-lg-6"> 
                                            <input class="form-control" name="loc_pincode" placeholder="Enter Pincode"></input> 
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">State : </label>

                                         <div class="col-lg-6">
                                           
                                                 <input class="form-control" name="loc_state" placeholder="Enter State"></input>
                                             
                                        </div>

                                         
                                    </div>

                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"> Country : </label>
                                        <div class="col-lg-6">
                                              <input class="form-control" name="loc_country" placeholder="Enter Country" ></input>
                                                
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


<!-- Add City --
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="POST" action="pages/insert_location.php" novalidate="novalidate">
                                    
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">City : </label>
                                        <div class="col-lg-6">

                                            
                                            <select name="loc_city" class="form-control">
                                               <option value=""> --- Select City --- </option>
                                               <?php 
                                                  while( $city = mysql_fetch_array($res)){
                                                    echo"<option value='". $city['lcity'] ."'>". $city['lcity'] ."</option>";
                                                  }
                                               ?>
                                            </select>    
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Pin Code : </label>
                                        <div class="col-lg-6"> 
                                            <input class="form-control" name="loc_pincode" ></input> 
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">State : </label>

                                         <div class="col-lg-6">
                                            <select name="loc_state" class="form-control">
                                               <option value=""> --- Select State ---</option>
                                            </select> 
                                        </div>

                                         
                                    </div>

                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"> Country : </label>
                                        <div class="col-lg-6">
                                            <select name="loc_country" class="form-control">
                                               <option value=""> --- Select Country ---</option>
                                            </select> 
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
