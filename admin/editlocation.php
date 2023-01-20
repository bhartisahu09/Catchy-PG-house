
<?php include("pages/connection.php") ?>
<?php include("top_header.php"); // to include an external php file ?>



<?php 
$lid = $_GET['lid'];
 $qry1 = "select * from location_tbl where lid='$lid'";

$res1 = mysql_query($qry1);

$row1 = mysql_fetch_array($res1, MYSQL_ASSOC);
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
                          EDIT LOCATION
                            
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="POST" action="pages/pgupdate.php" novalidate>
                                    
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">City : </label>
                                        <div class="col-lg-6">
                                             <input class="form-control" name="loc_city" placeholder="Enter City" type="text" 
                                             value="<?php echo $row1['lcity']?>"> </input>


                                            
                                               
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Pin Code : </label>
                                        <div class="col-lg-6"> 
                                            <input class="form-control" name="loc_pincode" placeholder="Enter Pincode" type="text"
                                             value="<?php echo $row1['lpostal']?>"></input> 
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">State : </label>

                                         <div class="col-lg-6">
                                           
                                                 <input type="text" class="form-control" name="loc_state" placeholder="Enter State" 
                                                  value="<?php echo $row1['lstate']?>"></input>
                                             
                                        </div>

                                         <input type="hidden" name="loc_id" value="<?php echo $row1['lid']?>">
                                    </div>

                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"> Country : </label>
                                        <div class="col-lg-6">
                                              <input class="form-control" name="loc_country" placeholder="Enter Country" type="text"
                                               value="<?php echo $row1['lcountry']?>"></input>
                                                
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
