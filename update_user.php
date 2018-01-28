<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


<?php

include('connect_db.php'); //include script to connect database


if(isset($_POST['user_name'])){

$new_value=$_POST['new_value'];
$field=$_POST['field'];
$user_name= $_POST['user_name'];

//echo $new_value,$field,$user_name;


		$update = "UPDATE user "."
		SET $field= '$new_value' "."
		 WHERE user_name = '$user_name'";
		
		
		$query = mysql_query($update,$connect);

		if(!$query){
			
			
			
			
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Update Failed')
			window.location.href='student_update.php';
			</SCRIPT>"); 
				
		}else{
			
			
			
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Successfully updated')
			window.location.href='student_update.php';
			</SCRIPT>");
				
		
		}

}

if(isset($_POST['new_value'])){

$new_value=$_POST['new_value'];
$field=$_POST['field'];
$sID= $_POST['sID'];

//echo $new_value,$field,$user_name;


		$update = "UPDATE parent "."
		SET $field= '$new_value' "."
		 WHERE sID = '$sID'";
		
		
		$query = mysql_query($update,$connect);

		if(!$query){
			
			echo ''. mysql_error();
			
			
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Update Failed')
			
			</SCRIPT>"); 
				
		}else{
			
			
		
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Successfully updated')
			
			</SCRIPT>");
				
		
		}

}

?>
</body>
</html>
