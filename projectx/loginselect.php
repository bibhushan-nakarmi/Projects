<html>
<table>
<?php
include 'db_connect.php';
session_start();
if($_SESSION['login_id']==""){
	echo header("location: loginform.php");
	exit();}
if(!isset($_SESSION["submit"]))
{
	$id=$_SESSION['login_id'];
	}
$sql=mysql_query("select * from login where login_id='$id'");
while ($datas=mysql_fetch_array($sql)){
	?>
  <tr>
    <th><?=$datas['login_id'];?></th><br>
    <th><?=$datas['First_name'];?></th> <br>
    <th><?=$datas['Last_name'];?></th><br>
    <th><?=$datas['Email'];?></th><br>
    <th><?=$datas['Phone_no'];?></th><br>
    <th><?=$datas['Address'];?></th><br>
    <th><?=$datas['Password'];?></th><b>
    <th><?=$datas['Gender'];?></th><br>
    <th><?=$datas['Date_of_birth'];?></th><br>
  </tr>
  <?php 								
}
?>
</table>
<form action="logout.php" method="post">
<input type="submit" value="logout" name="logout" >
</form>
</html>