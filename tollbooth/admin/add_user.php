<?php include "admin-header.php";
 include "check_login.php";
        
if(isset($_POST['add_user_btn'])){
    $p          = $_POST;
    $username   = $p['username'];
    $password   = $p['password'];
    $email      = $p['email'];
    $fname      = $p['fname'];
    $lname      = $p['lname'];
    $role = 'guest';
    //$address    = $p['address'];
    //$gender     = $p['gender'];

        $res = mysql_query("select * from tbl_guest_user where username = '$username'");
        $num_rows = mysql_num_rows($res);
        if($num_rows != 1){
            $query = mysql_query("insert into tbl_guest_user(id,username,password,email,fname,lname,ip_address,cookies_value,status,role,remark)values('','$username','$password','$email','$fname','$lname','','','0','$role','0')");
            if($query){
                header("location:dashboard.php?msg=Signup successful please enter your new username and password");
            }
            else{
                header("location:dashboard.php?msg=server error");
            }
        }
        else{
            header("location:dashboard.php?msg=Sorry usename already exist");
        }    

}
 ?>
     <div class="add_user_wrapper admin-bx">
        <h1>Admin you can add users from here Enter</h1>
            <form name="add_user" class="add_user" action="" method="post">
                <div class="uname">
                    <label>Username</label>
                    <input  type="text" name="username" id="textbox1" class="input-bx" required/>
                </div>
                <div id="result"></div>
                <div class="password">
                    <label>Password</label>
                    <input  type="password" name="password" id="original_password" class="input-bx" required/>
                </div>
                <!-- <div class="c-password">
                    <label>Confirm Password</label>
                    <input  type="password" name="cpassword" id="confirm_password" class="input-bx" required/>
                </div> -->
                <div class="email">
                    <label>Email</label>
                    <input  type="email" name="email" id="email" class="input-bx" required/>
                </div>
                <div class="f-name">
                    <label>First Name</label>
                    <input  type="text" name="fname" class="input-bx"/> 
                </div> 
                <div class="l-name">
                    <label>Last Name</label>
                    <input  type="text" name="lname" class="input-bx"/>
                </div>
                <input type="submit" name="add_user_btn" value="Add User" class="user" />
                <input type="reset" name="reset" value="Reset" class="reset" />
            </form>
    </div>
</body>
</html>