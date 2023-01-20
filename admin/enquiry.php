<?php include('pages/connection.php'); ?>
<?php include('top_header.php'); ?>


<?php

$qry = "select * from enquiry_tbl";
$res = mysql_query($qry);


?>


<body>
<section id="container">
<?php include('header.php'); ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper1">
		<div class="mail-w3agile">
        <!-- page start-->
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
                                      <th>USER-NAME</th>
                                      <th>PG-NAME</th>
                                      <th>VENDOR-NAME</th>
                                      <th >ENQUIRY DATE </th>
                                      <th >ENQUIRY MESSAGE </th>
                                      <th >OPTION </th>
                                    </tr>
                            </thead> 

                             <tbody>
                              <?php 
                              while( $row = mysql_fetch_array($res, MYSQL_ASSOC))
                              {
                                echo" <tr>
                            <td style='width: 20%'>".$row['uid']."</td>
                            <td style='width: 20%'>".$row['pgid']."</td>
                            <td style='width: 20%'> ".$row['vid']."</td>
                            <td style='width: 20%'>".$row['edate']."</td>
                            <td style='width: 20%'>".$row['emessage']."</td>

                            <td style='width:5%'>
                                <div class='dropdown'>
                                    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Select
                                        <span class='caret'></span></button>
                                            <ul class='dropdown-menu'>
                                                <li><a href='#'>Edit</a></li>
                                                <li><a href='#'>View</a></li>
                                                <li><a href='#'>Delete</a></li>
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