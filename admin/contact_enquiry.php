<?php include("pages/connection.php") ?>
<?php include("top_header.php"); // to include an external php file ?>


<?php
  
  $qry = "select * from  contact_tbl";
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
                       <h4 class="gen-case">CONTACT ENQUIRIES</h4>
                    </header>

                    <!--New  table  -- >
                       
                    <!-- //New table -->

                    <div class="panel-body minimal">
                      
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                      


                            <thead class="unread">
                                 
                             
                                   <tr>
                                     
                                      <th>NAME</th>
                                       <th>EMAIL </th>
                                     <th>NUMBER </th>
                                     <th>MESSAGE</th>
                                        <th>OPTION</th>
                                    
                                    
                                    </tr>
                            </thead> 
                            <tbody>
                              <?php
                              while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
                                    $c_id= $row['cid'];
                                      echo"<tr>
                                         
                                          <td style='width:10%'> ". $row['cname'].  "  </td>
                                          <td style='width:5%'>  ". $row['cemail']." </td>
                                          <td style='width:10%'> ". $row['cphone']. "  </td>
                                          <td style='width:10%'> ". $row['cmessage']. "  </td>
                                          <td style='width:5%'>
                                             <a href='pages/deletecontact_enquiry.php?cid=$c_id' class='btn btn-primary' style='color:#fff;'>Delete</a>
                                              
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
