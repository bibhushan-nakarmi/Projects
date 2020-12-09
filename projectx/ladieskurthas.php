<?php
$num_rec_per_page=10;
include 'db_connect.php';
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM table1 LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysql_query ($sql); //run the query
?>



<table>
<?php 
while($datas=mysql_fetch_array($rs_result))
{
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

<div class="pagination pull-right">
<?php
$sql = "SELECT * FROM table1"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);  
echo '<ul class="pagination">';
echo '<li>';
if($page>1)
{
echo "<a href='ladieskurthas.php?page=".($page-1)."'>".'prev'."</a> ";
echo '</li>';
}
echo '<li>';
echo "<a href='ladieskurthas.php?page=".($page)."'>"."Current page no. $page"."</a> ";
echo '</li>';
echo '<li>';
if($page!=$total_pages)
{
echo "<a href='ladieskurthas.php?page=".($page+1)."'>".'next'."</a> ";
echo '</li>';
}
echo '</ul>';
?>
</div>
</div>
</div>