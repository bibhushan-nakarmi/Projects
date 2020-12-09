<?php
    include "admin-header.php";
    include "check_login.php";
    $id = $_GET['id'];
    $user_email = $_GET['email'];
    if($_GET['status']==1){
        $time_duration = 0;
        //code for deactivation
        $query = mysql_query("update tbl_user_detail set status=0, start_date=0, total_days_access=$time_duration where id=$id");
        if($query){
            
            $to      = $user_email;
            $subject = 'Registration deactivated confirmation';
            $message = 'Hi your registration has been deactivated now you can only access home page and contact page of our site';
            $headers = 'From: noreply@tollbooth.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            
            mail($to, $subject, $message, $headers);
        header("location:dashboard.php?msg=User successfully deactivated");
        }else{
            echo 'error';
        }
    }
    else{
        //$current_date = new DateTime;
        //code for activation
        $time_duration = $_GET['time_duration'];
        $query = mysql_query("update tbl_user_detail set status=1, start_date=now() , total_days_access=$time_duration where id=$id");
        if($query){
            
            $to      = $user_email;
            $subject = 'Registration activated confirmation';
            $message = 'Hi your registration has been activated now you can access our site http://tollboothstrategy.com/login.php';
            $headers = 'From: noreply@tollbooth.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            
            mail($to, $subject, $message, $headers);
            
            
        header("location:dashboard.php?msg=User successfully activated");
        }else{
            echo 'error';
        }
    }
?>
</body>