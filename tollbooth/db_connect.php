<?php


$link = mysql_connect('192.168.1.6', 'access', 'access'); // ('host','db_username','db_password'))
$select_db=mysql_select_db('db_tollbooth'); // (db_name))
if (!$select_db) {
    die('Could not select db: ' . mysql_error());
}else{
// echo "DatabaSe selected";
}
?>