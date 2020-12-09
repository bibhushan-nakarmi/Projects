<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<? php 
include 'db_connect.php';
$sql=mysql_query ("select * from table1");
while($datas=mysql_fetch_array($sql)){
	?>
    
    <tr>
    <th><?=$datas['Name'];?></th><br>
    <th><?=$datas['Address'];?></th> <br>
    <th><?=$datas['Phone_num'];?></th><br>
    
    <th> <a href="update.php ? id= <?=$datas['table1_id'];?>">Update </a></th>
    <th> <a href="delete.php ? id=<?=$datas['table1_id'];?>">Delete </a></th>
  </tr>
  
  <? php 
}
?>
</body>
</html>