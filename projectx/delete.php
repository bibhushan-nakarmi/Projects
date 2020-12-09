

<?php
include 'db_connect.php';
$id=$_GET['id'];
		$sql=mysql_query("Delete from table1 where table1_id='$id'");
		if(mysql_error()){
	echo mysql_error();
	}
else{
	echo "Data deleted";
	}
?>
