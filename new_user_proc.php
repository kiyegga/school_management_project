<?php
	session_start() ;
	
	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New User</title>
</head>

<body>
<?php

include('connect_db.php'); //include script to connect database




// Validating user rights. Teacher cant add user

if($_SESSION['user_type'] == 'teacher'){

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('STOP: You have no rights to perform action')
    window.location.href='insert_results.php';
    </SCRIPT>");

}














if(isset($_POST['full_name'])){

$full_name=$_POST['full_name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email = $_POST['email'];
$usertype =$_POST['user_type'];
$user_name= $_POST['user_name'];
$password=$_POST['password'];
}

#####################################checking phone number####################
if(!is_numeric( $contact)){

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Phone number')
    window.location.href='index-1.html';
    </SCRIPT>");



}

 
#########################################checking empty fiels##################################################
		if($full_name=="" || $address=="" || $contact=="" || $usertype=="None" || $user_name=="" ){
		
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Fill All fields and Try Again')
    window.location.href='index-1.html';
    </SCRIPT>");
		
		
		}else{ ######################## If all fields are filled then we proceed###################
		
		
		
									
									
								###################### AFTER UPLOAD SUCCESS.....THEN INSERT DATA TO DATABASE###########
									
										$insert="INSERT INTO ".$usertype."	VALUES('$full_name','$address','$contact','$email','$usertype','$user_name','$password')";
										$query=mysql_query($insert,$connect);
									if($query){
									echo ("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('User Account successfully Added')
										window.location.href='index-1.html';
										</SCRIPT>");

									
									
									}else{
									
									echo ''.mysql_error();
								
									echo ("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Sorry, Operation Failed')
										window.location.href='index-1.html';
										</SCRIPT>");
									
									
									}
									
									
									############################## INSERT ENDS ##########################################
									
								
							
									
									}
							
							
							
			



?>

</body>
</html>
