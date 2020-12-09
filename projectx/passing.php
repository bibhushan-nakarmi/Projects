


<table>
<?php 
include 'db_connect.php';
$sql=mysql_query ("select * from table1");
while($datas=mysql_fetch_array($sql))
{
	?>
    
    <tr>
    <th><?=$datas['Name'];?></th><br>
    <th><?=$datas['Address'];?></th> <br>
    <th><?=$datas['Phone_num'];?></th><br>
    
    <th> <a href="update_form.php?id=<?=$datas['table1_id'];?>">Update</a></th>
    <th> <a href="delete.php?id=<?=$datas['table1_id'];?>">Delete</a></th>
  </tr>
  
<?php
}
?>
</table>
