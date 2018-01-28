<?php
	session_start() ;
	
	
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ORMS</title>
<!-- SET: FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<!-- END: FAVICON -->
<!-- SET: STYLESHEET -->
<link href="css/style (2).css" rel="stylesheet" type="text/css" media="all" />
<!-- END: STYLESHEET -->
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
<!-- wrapper starts -->
<div class="wrapper"> 
  <!-- main Starts -->
  <div class="main"> 
    <!-- Header Starts -->
    <div class="header">
      <div class="log flt_lt">
	  <table border="0px" style="text-align:center;" cellspacing="10px" >
	<tr>
	<td><a href="#"><img  src="log.png"  width="180px" height="100px" style="padding-left:20px;"/></a></td>
	<td><h1 style="font-size:50px; color:red;"> O'LEVEL RESULTS MANAGEMENT SYSTEM</h1></td>
	</tr>
	</table>
	</div>
      <div class="clear"></div>
      <div id="nav">
        <ul>
          <li><a href="index-1.html">HOME </a></li>
          <li><a href="student_registration.php">Student Registration </a></li>
          <li><a href="student_update.php">Update Accounts</a></li>
          
          <li><a href="insert_results.php"> Insert Results</a></li>
          <li><a href="report.php">Reports</a></li>
		  <li><a href="performance_analysis.php">Performance Analysis</a></li>
		  <li><a href="fees card.php">Fees card</a></li>
		  <li><a href="register.php">Register</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <!-- Header ends --> 
    <!-- content Starts -->
    <div class="content">
     <!-- <div class="banner">
        <div class="banner_text">
          <h2>Records Management Simplified</h2>
          <p>This is a web application designed to suit your school. manage pupils record from whereever you are at anytime. Download our android app to simplify work the more... </p>
          <a href="#">Read more</a></div>
        <a href="#"><img src="images/banner.jpg" width="940" height="344" alt="banner img" /></a></div>-->
      <div class="content1">
        
		<div align="center" class="myform">
		<h2><i>Update Student Information</i></h2>
			<form action="" method="post" id="myforms"  enctype="multipart/form-data" >				
			<table border="0" cellspacing="20px">

			
			<tr><td>Type Student ID: </td> <td><input type="text" name="sID" placeholder="Student ID no." data-constraints='@NotEmpty @Required '/></td></tr>	
			<tr><td>Choose Field :</td> <td><select name="field" >
										<option value="sName">Name</option>
										<option value="class">Class</option>
										<option value="status">Study status</option>
										<option value="age">Age</option>
										</select>
									
									</td></tr>
			
			<tr><td>New value </td> <td><input type="text" name="new_value" placeholder="Type new value" data-constraints='@NotEmpty @Required '/></td></tr>						
			
			</table>
			
			</form>
			<button type="submit" form="myforms" value="Submit" class="button">Submit</button>
			<hr style="margin:20px;" /> 
			
			<h2><i>Update User info</i></h2>
			<form action="update_user.php" method="post" id="myforms2" onsubmit="return validateForm();" enctype="multipart/form-data" >				
			<table border="0" cellspacing="20px">

			
			<tr><td>Type user name: </td> <td><input type="text" name="user_name" placeholder="User Name" data-constraints='@NotEmpty @Required '/></td></tr>	
			<tr><td>Choose Field :</td> <td><select name="field" >
										<option value="Full_name">Name</option>
										<option value="Contact">Contact</option>
										<option value="User_type">User type</option>
										<option value="Email">Email</option>
										</select>
									
									</td></tr>
			
			<tr><td>New value </td> <td><input type="text" name="new_value" placeholder="Type new value" data-constraints='@NotEmpty @Required '/></td></tr>						
			
			</table>
			
			</form>
			<button type="submit" form="myforms2" value="Submit" class="button" >Submit</button>
			</div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
    <!-- content ends -->
    <div class="footer">
      <p>Copyright @ 2018 ORMS. All rights reserved.  </p>
    </div>
  </div>
  <!-- main ends --> 
</div>
<!-- wrapper ends -->
</body>
</html>
<?php

include('connect_db.php'); //include script to connect database




// Validating user rights. Teacher cant add user

if($_SESSION['user_type'] == 'teacher'){

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('STOP: You have no rights to perform action')
    window.location.href='insert_results.php';
    </SCRIPT>");

}


if(isset($_POST['new_value'])){

$new_value=$_POST['new_value'];
$field=$_POST['field'];
$sID= $_POST['sID'];

//echo $new_value,$field,$user_name;


		$update = "UPDATE student "."
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


