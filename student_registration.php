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
		  <li><a href="report.php">Performance Analysis</a></li>
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
      <!--<div class="banner">
        <div class="banner_text">
          <h2>Records Management Simplified</h2>
          <p>This is a web application designed to suit your school. manage pupils record from whereever you are at anytime. Download our android app to simplify work the more... </p>
          <a href="#">Read more</a></div>
        <a href="#"><img src="images/banner.jpg" width="940" height="344" alt="banner img" /></a>
		</div> -->
      <div class="content1">
        
		<div align="center" class="myform">
		<h2><i>Register a Student</i></h2>
							
							
							
			<form action="" method="post" id="myforms"  enctype="multipart/form-data" >				
			<table border="0" cellspacing="20px">

			<tr><td>Full Name: </td> <td><input type="text" name="full_name" placeholder="Full names" data-constraints='@NotEmpty @Required '/></td></tr>
			<tr><td>Age:</td> <td><input type="text" name="Age" placeholder="Age" data-constraints='@NotEmpty @Required '/></td></tr>
			
			<tr><td>Class:</td> <td><select name="class" >
										<option value="S1">S.1</option>
										<option value="S2">S.2</option>
										<option value="S3">S.3</option>
										<option value="S4">S.4</option>
										</select>
									
									</td></tr>
			
		<tr><td>Study status:</td> <td><select name="status" >
										<option value="boarding">Boarding</option>
										<option value="day">Day</option>
										
										</select>
									
									</td></tr>
									<tr><td>Gender:</td> <td><select name="gender" >
										<option value="MALE">MALE</option>
										<option value="FEMALE">FEMALE</option>
										
										</select>
									
									</td></tr>
		<tr><td>Parent/Guardian:</td> <td><input type="text" name="parent" />
										
									
									</td></tr>	
									
			
			
			</table>
			
			</form>
			<button type="submit" form="myforms" value="Submit" class="button">Submit</button>
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


// RECEIVING DATA FROM the form
if(isset($_POST['full_name'])){

$full_name=$_POST['full_name'];
$Age=$_POST['Age'];
$class=$_POST['class'];
$parent = $_POST['parent'];
$status =$_POST['status'];
$gender = $_POST['gender'];

#####################################checking phone number####################
if(!is_numeric( $Age)){

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Age must be a number')
    
    </SCRIPT>");



}

################################Student Number Generator ############################################

				$sID = 'ST'.rand(0001,2000);







#########################################checking empty fiels##################################################
		if($full_name=="" || $Age=="" ){
		
		
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Fill All fields and Try Again')
			window.location.href='admin home.php';
			</SCRIPT>");
		
		
		}else{ ######################## If all fields are filled then we proceed###################
		
		
		
									
									
								###################### AFTER UPLOAD SUCCESS.....THRN INSERT DATA TO DATABASE###########
									
									$insert ="INSERT INTO student VALUES('$sID','$full_name','$class','$status','$parent','$Age','$gender')";
									
									$query = mysql_query($insert,$connect);
									
									if($query){
									echo ("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Successful and Student NO: ".$sID."')
										
										</SCRIPT>");
									}else{
									
									echo ''.mysql_error();
									
									
									
									}
									
									
									
									
									
									
									
									
									############################## INSERT ENDS ##########################################
									
								
							}
									
									}
							
							
							
					



?>