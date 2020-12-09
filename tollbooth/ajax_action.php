<?php
    include "db_connect.php";
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $res = mysql_query("select * from tbl_user_detail where username = '$username'");
        $num_rows = mysql_num_rows($res);
        if($num_rows==1){
            echo "Sorry! this username is already taken";
        }
        else{
            echo "<div class='available'>Available</div>";
        }
    }
?>