
<?php 
include 'db_connect.php';
$id=$_GET['id'];
		$sql=mysql_query("Update table1 Set Name= 'rooney', Address='manchester', Phone_num='+239876565545'  where table1_id='$id'");
		if(mysql_error()){
	echo mysql_error();
	}
else{
	echo "Data updated";
	}
		
		?>