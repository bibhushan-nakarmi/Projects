<?php
include 'db_connect.php';

if(isset($_POST['submit']) && $_POST['submit']=="Submit"){
									$name=$_POST['name'];
									$address=$_POST['address'];
									$phone=$_POST['phone'];
									}
$sql=mysql_query("insert into table1 (Name,Address,Phone_num) values('$name','$address','$phone')");	

if(mysql_error()){
	echo mysql_error();
	}
else{
	echo "Data inserted.";
	}
?>