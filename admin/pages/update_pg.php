<?php 
	//	print_r($_POST);

	require('connection.php');

	$p_name = $_POST["pgname"];

	$pg_id= $_POST['pid'];

	$pg_city=$_POST['pgcity'];

$pg_addr = $_POST["pgadress"];

$pg_des = $_POST["pgdescription"];

$pgtype = $_POST['pg_type'];
$pg_contact = $_POST["pgcontact"];

$pg_rent = $_POST["pg_rent"];

$pg_size = $_POST["no_room"];


$pgvendor_id = $_POST['pgvendorid'];


$vendor_name = $_POST["pgvendor"];

$vendor_phone = $_POST["vendor_phone"];

$vendor_mail = $_POST["vendor_mail"];

$vendor_address = $_POST["vendor_addr"];
$ammnt = $_POST["amminity"];
$added_on = date('y/m/d');
$pg_status = "Active";

$pgfor = $_POST['pgfor'];

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
	$photo1 = $_POST['hidden_photo1'];
}

if(!empty($_FILES["photo2"]["name"])){
  if (move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_dir . basename($_FILES["photo2"]["name"]))) {
       $photo2 = basename($_FILES["photo2"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
else{
	$photo2 = $_POST['hidden_photo2'];
}

if(!empty($_FILES["photo3"]["name"])){
	 if (move_uploaded_file($_FILES["photo3"]["tmp_name"], $target_dir . basename($_FILES["photo3"]["name"]))) {
        $photo3 = basename($_FILES["photo3"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
else{
	$photo3 = $_POST['hidden_photo3'];
}
	
	
	$query = "update pg_tbl set pname='$p_name', pid='$pg_id', paddress='$pg_addr', pcity='$pg_city', paddon='$added_on', pstatus='$pg_status', 
	 pdescription='$pg_des', pcontact='$pg_contact', pgrent='$pg_rent', pgsize='$pg_size', pgtype='$pgtype', pgfor='$pgfor', pgimage='$photo1' where pid='$pg_id'";
	

	mysql_query($query);

	$query1= "update vendors_tbl set vname='$vendor_name', vphone='$vendor_phone', vemail='$vendor_mail', vaddress='$vendor_address' 
                where vid='$pgvendor_id'";
	mysql_query($query1);


$pic = "update images_tbl set mfile='$photo1', mfile2='$photo2', mfile3='$photo3' where mpg='$pg_id'";
mysql_query($pic);

$amdel = "delete from pg_amminity where pg_id='$pg_id'";
mysql_query($amdel);

foreach($ammnt as $row){
$sql = "insert into pg_amminity(pg_id,atitle) values('$pg_id','$row')";
mysql_query($sql);
echo $sql;
}

	header('location:../editpg.php?pid='.$pg_id)

?>