<?php include("pages/connection.php"); ?>

<?php include("top_header.php"); // to include an external php file ?>


<?php
  
  $qry = "select * from pg_tbl";
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
                       <h4 class="gen-case">All PG</h4>
                    </header>

                    <!--New  table  -- >
                       
                    <!-- //New table -->

                    <div class="panel-body minimal">
                       <a href="addpg.php" class="btn btn-primary pull-right"> <b>+</b> Add New PG</a>
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                       


                            <thead class="unread">
                                 
                             
                                   <tr>
                                     <th>NAME OF PG</th>
                                     <th>ADDRESS</th>
                                     <th>CITY</th>
                                     <th>CONTACT NUMBER </th>
                                     <th>Options</th>
                                    </tr>
                            </thead> 

                             <tbody>
                               <?php
                              while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
                                      $pgid= $row['pid'];
                                      echo"
                        <tr>
                            <td style='width:15%'>".$row['pname']."</td>
                            <td style='width:15%'>".$row['paddress']."</td>
                            <td style='width:5%'>".$row['pcity']."</td>
                            <td style='width:10%'>".$row['pcontact']."</td>
                            <td style='width:10%'>
                               <div class='dropdown'>
                                  <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Select
                                  <span class='caret'></span></button>
                                   <ul class='dropdown-menu'>
                                    <li><a href='editpg.php?pid=$pgid'>Edit</a></li>
                                   
                                    <li><a href='pages/deletepg.php?pid=$pgid'>Delete</a></li>
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
