<?php
session_start();
include 'db_connect.php';
$_SESSION['id']="login_id";
session_destroy();
echo header ("location: loginform.php");
exit();
?>