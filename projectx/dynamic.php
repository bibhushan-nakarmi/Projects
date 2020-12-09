<?php 
include 'db_connect.php';
$id=$_GET['id'];
if(isset($_POST['submit']) && $_POST['submit']=="Submit"){
									$name=$_POST['name'];
									$address=$_POST['address'];
									$phone=$_POST['phone'];
									}
		$sql=mysql_query("Update table1 Set Name= '$name', Address='$address', Phone_num='$phone'  where table1_id='$id'");
		if(mysql_error()){
	echo mysql_error();
	}
else{
	echo "Data updated";
	}
		
		?>