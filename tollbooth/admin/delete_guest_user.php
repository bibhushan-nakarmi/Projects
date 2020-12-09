<?php
    include "admin-header.php";
     include "check_login.php";
    $id = $_GET['id'];
    
    if($id!=''){
        //code for deactivation
        $query = mysql_query("delete from tbl_guest_user where id=$id");
        header("location:dashboard.php?msg=User successfully Deleted");
    }
?>
</body>
</html>