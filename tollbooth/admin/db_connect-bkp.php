<?php
    $conn = mysql_connect("192.168.1.6","access","access");
    mysql_select_db("db_tollbooth");
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>