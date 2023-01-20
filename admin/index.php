<?php include('pages/connection.php'); ?>
<?php include("top_header.php"); // to include an external php file ?>



<?php

$qry = "select * from enquiry_tbl inner join vendors_tbl on vendors_tbl.vid = enquiry_tbl.vid  inner join user_tbl on user_tbl.uid = enquiry_tbl.uid  inner join pg_tbl on pg_tbl.pid = enquiry_tbl.pgid";
$res = mysql_query($qry);


?>



<body>
<section id="container">
<?php include('header.php'); ?> 
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			
			</div>
		   
		</div>	
	<div class="row">
            
            <div class="col-sm-12 mail-w3agile">
                <section class="panel">




                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case">Enquiries 
                        
                       </h4>
                    </header>

 <!--New  table  -- >
                       
                    <!-- //New table -->

                    <div class="panel-body minimal">
                        
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                       
                            <thead class="unread">
                                    <tr>
                                      <th>USER Name</th>
                                      <th>Contact</th>
                                      <th>PG Name</th>
                                      <th>VENDOR Name</th>
                                      <th >ENQUIRY DATE </th>
                                      <th >ENQUIRY MESSAGE </th>
                                    
                                    </tr>
                            </thead> 

                             <tbody>
                              <?php 
                              while( $row = mysql_fetch_array($res, MYSQL_ASSOC))
                              {
                                echo" <tr>
                            <td style='width: 10%'>".$row['uname']."</td>
							              <td style='width: 10%'>".$row['uphone']."</td>
                            <td style='width: 10%'>".$row['pname']."</td>
                            <td style='width: 10%'> ".$row['vname']."</td>
                            <td style='width: 10%'>".$row['edate']."</td>
                            <td style='width: 10%'>".$row['emessage']."</td>

                           
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
		
<?php include('footer.php'); ?>