<?php  

require("connection.php");
    $am_id = $_GET['amid'];

    $query = "delete from amenities_tbl where amid ='$am_id'";

      mysql_query($query);

      header('location:../amenities.php');


?>