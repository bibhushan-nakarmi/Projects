<?php 
session_start();
include'db_connect.php';
if(isset($_POST["submit"]) && $_POST["submit"] == "Login"){
	$username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysql_query("SELECT * FROM login WHERE First_name='$username' AND password='$password'");

    if(mysql_num_rows($result) > 0){
        $row = mysql_fetch_assoc($result);
		
        $_SESSION['login_id'] = $row['login_id'];
        $_SESSION['email'] = $row['email'];
                
      header("Location: " . "loginselect.php"); exit;
    }
    else{
        echo "Invalid username or password";
    }
}
?>