<?php
require("connection.php");


$pname = $_POST["pgname"];

$pgaddr = $_POST["pgadress"];

$pgdes = $_POST["pgdescription"];


$pgcontact = $_POST["pgcontact"];

$pg_rent = $_POST["pg_rent"];

$pgsize = $_POST["no_room"];

$pcity = $_POST["pgcity"];
$vendor = $_POST["pgvendor"];

$vendor_phone = $_POST["vendor_phone"];
$pgtype = $_POST['pg_type'];
$vendor_mail = $_POST["vendor_mail"];

$vendor_address = $_POST["vendor_addr"];
$vcity = $_POST['vendor_city'];
$added_on = date('y/m/d');
$pg_status = "Active";

$pgfor = $_POST['pgfor'];
$ammnt = $_POST['amminity'];

$target_dir = "../../images/pg/";
$uploadOk = 1;

if(!empty($_FILES["photo1"]["name"])){
   if (move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_dir . basename($_FILES["photo1"]["name"]))) {
        $photo1 = basename($_FILES["photo1"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
else{
	$photo1 = "";
}

if(!empty($_FILES["photo2"]["name"])){
  if (move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_dir . basename($_FILES["photo2"]["name"]))) {
       $photo2 = basename($_FILES["photo2"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
else{
	$photo2 = "";
}

if(!empty($_FILES["photo3"]["name"])){
	 if (move_uploaded_file($_FILES["photo3"]["tmp_name"], $target_dir . basename($_FILES["photo3"]["name"]))) {
        $photo3 = basename($_FILES["photo3"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
else{
	$photo3 = "";
}
	
 $query = "insert into vendors_tbl(vname, vphone, vemail, vaddress, vcity) values('$vendor','$vendor_phone','$vendor_mail','$vendor_address','$vcity')";
 mysql_query($query);

$vid = mysql_insert_id($con);

$query1 = "insert into pg_tbl(pname, paddress, pcity, paddon, pstatus, pdescription, pcontact, pgrent, pgsize, pgtype, pgfor, pgimage, pgvendor) values('$pname','$pgaddr','$pcity','$added_on','$pg_status','$pgdes','$pgcontact','$pg_rent','$pgsize', '$pgtype', '$pgfor', '$photo1','$vid')";
 mysql_query($query1);

$pgid =   mysql_insert_id($con);

$pic = "insert into  images_tbl (mtitle, mfile, mfile2, mfile3, mpg) values('$pname','$photo1','$photo2','$photo3','$pgid')";
mysql_query($pic);

foreach($ammnt as $row){
$sql = "insert into pg_amminity (pg_id,atitle ) values('$pgid','$row')";
mysql_query($sql);
}

 header('location:../allpg.php');

?>