<?php include("pages/connection.php") ?>
<?php include("top_header.php"); // to include an external php file ?>



<?php
  
  $qry = "select * from amenities_tbl";
  $res = mysql_query($qry);

 
?>

<body>
<section id="container">
 <?php include('header.php') ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper1">
		<div class="mail-w3agile">
        <!-- page start-->
        <div class="row">
            
            <div class="col-sm-12 mail-w3agile">
                <section class="panel">
                    

                    <!--New  table  -- >
                       
                    <!-- //New table -->

                    <div class="panel-body minimal">
                      
                        <div class="table-inbox-wrap col-md-8 ">

                           <header class="panel-heading wht-bg">
                       <h4 class="gen-case">AMENITIES OF PG</h4>
                    </header>
                            <table class="table table-inbox table-hover">
                       


                            <thead class="unread">
                                 
                             
                                   <tr>
                                     <th>TITLE</th>
                                    
                                     
                                     <th>Options</th>
                                    </tr>
                            </thead> 

                             <tbody>
                               <?php
                              while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
                                      $am_id= $row['amid'];
                                      echo"
                          <tr>
                            <td style='width:15%'>".$row['amtitle']."</td>
                          
                           
                            <td style='width:10%'>
                                <a href='pages/deleteamenities.php?amid=$am_id' style='color:#fff;' class='btn btn-primary'>DELETE</a>
                            </td>
                          </tr>";
                    }
                        ?>
                        </tbody>
                        </table>

                        </div>


                        <div class="col-md-4">
                            <header class="panel-heading wht-bg">
                       <h4 class="gen-case">ADD AMENITIES</h4>
                     </header>
                       <div class="panel-body " style="border: 1px solid red;">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="POST" action="pages/insert_amenities.php" novalidate>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label" style="padding: 20px;"> Amenities Of Your PG: </label><br>
                                        <div class="col-lg-12"> 
                                            <textarea class="form-control " row="5" cols="8" placeholder="Description" name="amdescription" ></textarea> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class=" col-lg-6">
                                            <button class="btn btn-primary" type="submit">Add</button>
                                         
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                                  
                    </header>
                        </div>
                    </div>
                </section>
                                </div>
                            </div>

                            <!-- page end-->
                            </div>
                    </section>
                    <?php include('footer.php'); ?>
