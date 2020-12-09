<?php
if($_SESSION['admin_username'] ==''){
    header("location:login.php?msg=Please login to continue");
}
?>