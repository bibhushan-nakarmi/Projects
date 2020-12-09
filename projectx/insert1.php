<?php
include 'db_connect.php';
if(isset($_POST['submit']) && $_POST['submit']=="Sign Up"){
									$fname=$_POST['fname'];
									$lname=$_POST['lname'];
									$email=$_POST['email'];
									$phone_no=$_POST['phone_no'];
									$address=$_POST['address'];
									$password=$_POST['password'];
									$rpassword=$_POST['rpassword'];
									$gender=$_POST['gender'];
									$dob=$_POST['dob'];
									}
$sql=mysql_query("insert into login (First_name,Last_name,Email,Phone_no,Address,Password,Rewrite_password,Gender,Date_of_birth) values('$fname','$lname','$email','$phone_no','$address','$password','$rpassword','$gender','$dob')");	

if(mysql_error()){
	echo mysql_error();
	}
else{
	echo "Data inserted.";
	}
?>