<?php include("pages/connection.php") ?>
<?php include("top_header.php"); // to include an external php file ?>


<?php
  
  $qry = "select lcity from location_tbl";
  $res = mysql_query($qry);

  $qry2 =" select lcity from location_tbl";

  $res2 = mysql_query($qry2);

 $am = "select * from amenities_tbl";
  $amnity = mysql_query($am);
?>

<?php 

$pgid= $_GET['pid'];

$qry1= "select * from pg_tbl inner join vendors_tbl on vendors_tbl.vid = pg_tbl.pgvendor where pid='$pgid'";

$res1= mysql_query($qry1);

$row1= mysql_fetch_array($res1);

 $am1 = "select * from pg_amminity where pg_id = '$pgid'";
 $amnit = mysql_query($am1);
 
 $pic3 = "select * from images_tbl where mpg = '$pgid'";
 $pic = mysql_query($pic3);
 $pics = mysql_fetch_array($pic, MYSQL_ASSOC);
 while($paminity = mysql_fetch_array($amnit, MYSQL_ASSOC)){
	$paminity1[] = $paminity; 
 }
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
                           EDIT NEW PG 
                            
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " enctype="multipart/form-data" id="signupForm" method="POST" action="pages/update_pg.php" novalidate>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"> Name : </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="pgname" name="pgname" type="text"
                                            value="<?php echo $row1['pname']?>">
                                        </div>
                                    </div>
                                    <input class=" form-control" id="pid" name="pid" type="hidden"
                                            value="<?php echo $row1['pid']?>">
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3"> Address : </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="pgadress" name="pgadress" rows="3" cols="5" ><?php echo $row1['paddress']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">City : </label>
                                        <div class="col-lg-6">
                                            <select name="pgcity" class="form-control">
                                               <option value=""> --- Select City ---</option>
                                                <?php 
                                                 $pgcity = $row1['pcity'];
                                                  while( $city = mysql_fetch_array($res)){
                                                    if($pgcity == $city['lcity']){
                                                        $op = 'selected';
                                                    }
                                                    else{
                                                        $op='';
                                                    }
                                                    echo"<option value='". $city['lcity'] ."' $op>". $city['lcity'] ."</option>";
                                                  }
                                               ?>
                                            </select>    
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Description : </label>
                                        <div class="col-lg-6"> 
                                            <textarea class="form-control " placeholder="Description" name="pgdescription" ><?php echo $row1['pdescription']?></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Contact : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="number" class="form-control" id="pgcontact" name="pgcontact"
                                            value="<?php echo $row1['pcontact']?>">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"> Name of Vendor : </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="pgvendor" name="pgvendor" type="text"
                                            value="<?php echo $row1['vname']?>">
                                        </div>
                                    </div>
                                       <input class=" form-control" id="pgvendorid" name="pgvendorid" type="hidden"
                                            value="<?php echo $row1['pgvendor']?>"> 
                                     <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Contact NO. Of Vendor : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="number" class="form-control" id="vendor_phone" name="vendor_phone"
                                            value="<?php echo $row1['vphone']?>">
                                        </div>
                                    </div>

                                     <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Email-ID Of Vendor : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="text" class="form-control" id="vendor_mail" name="vendor_mail"
                                            value="<?php echo $row1['vemail']?>">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Address Of Vendor : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <textarea type="text" class="form-control" id="vendor_addr" name="vendor_addr"><?php echo $row1['vaddress']?></textarea> 
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">City Of Vendor : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <select name="vendor_city" class="form-control">
                                               <option value=""> --- Select City ---</option>
                                                <?php 
												$vendorcity = $row1['vcity'];
                                                  while( $city1 = mysql_fetch_array($res2, MYSQL_ASSOC)){
													  if($vendorcity == $city1['lcity']){
                                                        $op = 'selected';
                                                    }
                                                    else{
                                                        $op='';
                                                    }
                                                    echo"<option value='". $city1['lcity'] ."' $op>". $city1['lcity'] ."</option>";
                                                  }
                                               ?>
                                            </select>  
                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Rent Of PG : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="number"  class="form-control" id="pg_rent" name="pg_rent" value="<?php echo $row1['pgrent']?>">
                                        </div>
                                    </div>

                                     <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Size Of PG in BHK : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="number"  class="form-control" id="no_room" name="no_room"
                                            value="<?php echo $row1['pgsize']?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Accomodation For : </label>
                                        <div class="col-lg-6 col-sm-9">
                                           <select class="form-control"  name="pgfor">
                                              <option value=""> --- Select ---</option>
                                              <option value="Both" <?php if($row1['pgfor'] =="Both"){echo'selected';} ?>> Both</option>
                                              <option value="Only Boys" <?php if($row1['pgfor'] =="Only Boys"){echo'selected';} ?>>Only Boys</option>
                                              <option value="Only Girls" <?php if($row1['pgfor'] =="Only Girls"){echo'selected';} ?>>Only Girls</option>
                                              <option value="Only Family" <?php if($row1['pgfor'] =="Only Family"){echo'selected';} ?>>Only Family</option>
                                           </select>
                                        </div>
                                    </div>
                                    
                                      <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Type : </label>
                                        <div class="col-lg-6 col-sm-9">
                                           <select class="form-control" name="pg_type">
                                              <option value=""> --- Select PG Type ---</option>
                                              <option value="Furnished" <?php if($row1['pgtype'] =="Furnished"){echo'selected';} ?>>Furnished</option>
                                              <option value="Semi-Furnished" <?php if($row1['pgtype'] =="Semi-Furnished"){echo'selected';} ?>>Semi-Furnished</option>
                                              <option value="Not-Furnished" <?php if($row1['pgtype'] =="Not-Furnished"){echo'selected';} ?>>Not-Furnished</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="newsletter" class="control-label col-lg-3 col-sm-3">Ammenities : </label>
                                        <div class="col-lg-6 col-sm-9">
                                           <?php
										  
										   function multi_in_array($value, $array) 
												{ 
													foreach ($array AS $item) 
													{ 
														if (!is_array($item)) 
														{ 
															if ($item == $value) 
															{ 
																return true; 
															} 
															continue; 
														} 
												
														if (in_array($value, $item)) 
														{ 
															return true; 
														} 
														else if (multi_in_array($value, $item)) 
														{ 
															return true; 
														} 
													} 
													return false; 
												}

										   while($amn = mysql_fetch_array($amnity, MYSQL_ASSOC)){
											$is = multi_in_array($amn['amtitle'],$paminity1);
                                            if($is){
											  $op4 ='checked';	
											}
											else{
												$op4='';
											}
											 echo"<input type='checkbox' $op4  id='amminity' name='amminity[]' value='". $amn['amtitle']."'>
											  ". $amn['amtitle']."&nbsp&nbsp&nbsp";
										   }
										   ?>
                                        </div>
                                    
                                    </div>
                                     <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Update Photos : </label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="file"  class="form-control" id="photo1" name="photo1">
                                             <input type="file"  class="form-control" id="photo2" name="photo2">
                                             <input type="file"  class="form-control" id="photo3" name="photo3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-md-4">
                                       <img src="../images/pg/<?php echo $pics['mfile'] ?>" class="img-responsive">
                                       <input type="hidden" name="hidden_photo1" value="<?php echo $pics['mfile'] ?>">
                                       </div>
                                       <div class="col-md-4">
                                       <img src="../images/pg/<?php echo $pics['mfile2'] ?>" class="img-responsive">
                                       <input type="hidden" name="hidden_photo2" value="<?php echo $pics['mfile2'] ?>">
                                       </div>
                                       <div class="col-md-4">
                                         <img src="../images/pg/<?php echo $pics['mfile3'] ?>" class="img-responsive">
                                         <input type="hidden" name="hidden_photo3" value="<?php echo $pics['mfile3'] ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Update</button>
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
