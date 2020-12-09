<?php include'db_connect.php';
  if(isset($_POST["submit"])&& $_POST["submit"]=="submit"){
 if(isset($_FILES['upload'])){
		$uploadname=$_FILES['upload']['name'];
		$uploadname=mt_rand(100000,999999). $uploadname;
		$uploadtemp=$_FILES['upload']['tmp_name'];
		$uploadtype=$_FILES['upload']['type'];
		$filesize=$_FILES['upload']['size'];
	}	
	$query="INSERT INTO utable(u_image) VALUES('$uploadname')";
	$result=mysql_query($query);
	if(mysql_error()){
    	    echo mysql_error();
	
				    }
    	else{
		move_uploaded_file($uploadtemp,"$uploadname");
			echo
		 	header("Location: " . "addbanner.php");
			exit;
   	 }
		}
?>

                                    <form role="form" method="post" enctype="multipart/form-data" action="#">
                                            	<input class="form-control" type="file"  accept="""name="upload" value="upload" required/>
                                                <center><button type="submit" name="submit" value="submit" class="btn btn-success">Add Banner</button></center>
                                    </form>
