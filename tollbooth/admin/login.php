<?php
include "admin-header.php";
if(isset($_SESSION['admin_username'])){
    header("location:dashboard.php");
}
if(isset($_POST['submit'])){
    include "../db_connect.php";
    $p = $_POST;
    $username = $p['username'];
    $password = $p['password'];
    $res = mysql_query("select * from tbl_admin where username = '$username' and password='$password' and status='1'");
    $num_rows = mysql_num_rows($res);
    if($num_rows==1){
        $_SESSION['admin_username'] = $username;
        $data = mysql_fetch_assoc($res);
        $_SESSION['admin_id'] = $data['id'];
        header("location:dashboard.php");
    }
    else{
        header("location:login.php?msg=Incorrect username or password");
    }
}
?>
<div class="admin-bx clear">
    <h3>Admin Login</h3>
    <form action="" method="post" class="admin-form">
        <div>
            <label>Username</label>
            <input type="text" name="username" class="in"/>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" class="in"/>
        </div>
        <div class="submit-btn"><input type="submit" name="submit" value="Login" class="login"/></div>
        <div class="clear"></div>
    </form>
    <div class="admin-error">
        <?php
        if(isset($_GET['msg'])){echo $_GET['msg'];}
        ?>
    </div>
</div>