	<table>
<?php
include 'db_connect.php';
$sql=mysql_query("select * from table1");
while ($datas=mysql_fetch_array($sql)){
	?>
  <tr>
    <th><?=$datas['Name'];?></th><br>
    <th><?=$datas['Address'];?></th> <br>
    <th><?=$datas['Phone_num'];?></th><br>
  </tr>
  
  
  <?php 								
}
?>
</table>