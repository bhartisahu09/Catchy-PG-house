<?php include("pages/connection.php") ?>
<?php include("top_header.php"); // to include an external php file ?>


<?php
  
  $qry = "select * from location_tbl";
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
                     <header class="panel-heading wht-bg">
                       <h4 class="gen-case">Location</h4>
                    </header>

                    <!--New  table  -- >
                       
                    <!-- //New table -->

                    <div class="panel-body minimal">
                      <a href="addlocation.php" class="btn btn-primary pull-right"> <b>+</b> Add Location</a>
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                      


                            <thead class="unread">
                                 
                             
                                   <tr>
                                     
                                      <th>CITY</th>
                                       <th>PINCODE </th>
                                     <th>STATE </th>
                                     <th>COUNTRY</th>
                                    
                                    
                                    </tr>
                            </thead> 
                            <tbody>
                              <?php
                              while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
                                    $lid= $row['lid'];
                                      echo"<tr>
                                         
                                          <td style='width:10%'> ". $row['lcity'].  "  </td>
                                          <td style='width:5%'>  ". $row['lpostal']." </td>
                                          <td style='width:10%'> ". $row['lstate']. "  </td>
                                          <td style='width:5%'>
                                              <div class='dropdown'>
                                                <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Select
                                                <span class='caret'></span></button>
                                                 <ul class='dropdown-menu'>
                                                  <li><a href='editlocation.php?lid=$lid'>Edit</a></li>
                                                 
                                                  <li><a href='pages/deletelocation.php?lid=$lid'>Delete</a></li>
                                                </ul>
                                              </div>
                                          </td>
                                      </tr>";

                                    }
                              ?>
                        </tbody>
                        </table>

                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- page end-->
        </div>
</section>
<?php include('footer.php'); ?>
