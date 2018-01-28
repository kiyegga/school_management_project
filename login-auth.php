<?php
	session_start() ;
	
	
	?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PPT-System</title>
<link type="text/css" href="css/styler.css"  rel="stylesheet" />
<script>
function validateForm() {
    var x = document.forms["myforms"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>

</head>

<body>

							
							
				<?php
				
				include('connect_db.php'); //include script to connect database
			  //open session started
				
				$username = $_POST['user'];
				$password = $_POST['pass'];
				$user_type = '';
				
				
				
				// Checking all fields are not empty
				if($username != NULL || $password != NULL  ){
				
				//querying the database to check if user info exists
				$query =mysql_query("SELECT * FROM user WHERE user_name='$username'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						
						$db_psswd = $row['password'];
						$db_name = $row['user_name'];
						$user_type = $row['User_type'];
						$full_name = $row['Full_Name'];
						}
						
					######################### Loading session variables######################	
						
							$_SESSION['username'] = ''.$db_name.'';
							$_SESSION['user_type'] = ''.$user_type.'';
							$_SESSION['full_name'] = ''.$full_name.'';
							$_SESSION['password'] = ''.$db_psswd.'';
						
					######################## session variables end ########################	
			 echo $user_type;
				   	if($db_psswd != $password){ //if pasword doesnt match....meaning wrong account
					
					echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Incorrect password or Username, Try Again')
					window.location.href='index.html';
					</SCRIPT>");
					
					} //if password match redirect to home page
							
							if($user_type == 'Parent' ){
							
							
							echo ("<SCRIPT LANGUAGE='JavaScript'>
							
							window.location.href='parent_home.php';
							</SCRIPT>");
								
							
							
							}else{
							
							echo ("<SCRIPT LANGUAGE='JavaScript'>
							
							window.location.href='index-1.html';
							</SCRIPT>");
							}
					
					
					
					
				
						
				
				
				}else{
				
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Fill All fields and Try Again')
				window.location.href='index.html';
				</SCRIPT>");
							
				
				}
				
				
				
				?>			
							
			
	  		</div>
	  
	  
	  </div>
</div>



</body>
</html>