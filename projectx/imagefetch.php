
<table>
<?php
	include 'db_connect.php';
	$sql=mysql_query("select u_image from utable");
	while ($datas=mysql_fetch_array($sql)){
		?>
		<tr>
        <th><img src="<?=$datas['u_image'];?>" align="center" height="200%" width="175%" /></th>
        </tr>
	<?php
	}
	?>
    </table>
		