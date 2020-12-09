<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'db_connect.php';
$id=$_GET['id'];
$sql=mysql_query("select * from table1 where table1_id='$id'");
$datas=mysql_fetch_array($sql);

?>

<form action="dynamic.php?id=<?=$datas['table1_id'];?>" method="post">
Name:<input type="text" name="name" value="<?=$datas['Name'];?>"/><br/>
Address:<input type="text" name="address" value="<?=$datas['Address'];?>"/><br/>
Phone No.:<input type="text"  name="phone" value="<?=$datas['Phone_num'];?>"/><br/>
<input type="submit" name="submit" value="Submit"/>
<input type="reset" name="reset" value="Cancel" />
</form>

</body>
</html>