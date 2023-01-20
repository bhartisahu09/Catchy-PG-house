<?php include('pages/connection.php'); ?>
<?php include("top_header.php"); // to include an external php file ?>



<?php
    $qry= 'select * from user_tbl';
    $res= mysql_query($qry);



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
                       <h4 class="gen-case">User</h4>
                    </header>

                    <!--New  table  -- >
                       
                    <!-- //New table -->

                    <div class="panel-body minimal">
                     
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                        


                            <thead class="unread">
                                 
                             
                                   <tr>
                                     <th>NAME</th>
                                      <th>EMAIL</th>
                                       <th>CONTACT NUMBER </th>
                                     <th>ADDRESS </th>
                                     <th>CITY</th>
                                      <th>Option</th>
                                    
                                    
                                    </tr>
                            </thead> 

                            <tbody>
                              <?php 
                              while($row =mysql_fetch_array($res,MYSQL_ASSOC)){
                                    $user_id=$row['uid'];
                               echo "<tr>
                            <td style='width:8%'> ".$row['uname']."    </td>
                            <td style='width:8%'> ".$row['uemail']."   </td>
                            <td style='width:10%'>  ".$row['uphone']."   </td>
                            <td style='width:10%'> ".$row['uaddress']." </td>
                             <td style='width:5%'> ".$row['ucity']." </td>
                            <td style='width:5%'>
                               <a href='pages/deleteuser.php?uid=$user_id' class='btn btn-primary' style='color:#fff;' >Delete </a>
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
