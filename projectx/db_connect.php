<?php
$con=mysql_connect('localhost','root','');

if(!$con){
	echo "unable to connect";
	}
	
$db=mysql_select_db('dbase');

if(!$db){
	echo "unable to connect database";
	}
?>