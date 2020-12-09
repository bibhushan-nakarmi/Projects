<?php include "admin-header.php";
     include "check_login.php";
    if(isset($_SESSION['admin_username'])){
        header("location:dashboard.php");
    }
    if(isset($_POST['submit'])){
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

<h3>Admin Login</h3>
<form action="" method="post">
    <label>Username</label><br />
    <input type="text" name="username"/><br /><br/>
    <label>Password</label><br />
    <input type="password" name="password"/><br /><br />
    <input type="submit" name="submit" value="Login"/><br /><br />
</form>

<?php
    if(isset($_GET['msg'])){echo $_GET['msg'];}
?>
</body>
</html>