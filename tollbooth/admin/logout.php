<?php
    include "admin-header.php";
    session_unset('admin_username');
    session_unset('id');
    session_destroy();
    header("location:login.php?msg=You have been successfully logged out");
?>
</body>
</html>