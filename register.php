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
      <div class="banner">
        
      <div class="content1">
        
		<div align="center" class="myform">
		<h2><i>Choose a Register to view</i></h2>
							
				<BR /><br />		<br />	
							
			<form action="view_reg.php" method="post" id="myforms" onsubmit="return validateForm();" enctype="multipart/form-data" >				
			<table border="0" cellspacing="20px">			
			
			<tr><td>I want to View:</td> <td><select name="user_type" >
										
										<option value="Admin">Admins</option>
										<option value="Teacher">Teachers</option>
										<option value="Bursar">Bursars</option>
										<option value="Parent">Parents</option>
										</select>
									</td></tr>
			
			
			</table>			
			</form>
			<button type="submit" form="myforms" value="Submit" class="button">Submit</button>
			<br /><br />
			<hr />
			<br /><br /><br /><br />
			<h2><i>View Class Register</i></h2>
			<br /><br />
			<form action="view_reg.php" method="post" id="myforms2" onsubmit="return validateForm();" enctype="multipart/form-data" >				
			<table border="0" cellspacing="20px">			
			
			<tr><td>Class List:</td> <td><select name="class" >
										
										<option value="S1">S.1</option>
										<option value="S2">S.2</option>
										<option value="S3">S.3</option>
										<option value="S4">S.4</option>
										</select>
									
			
			
			</table>			
			</form>
			<button type="submit" form="myforms2" value="Submit" class="button">Submit</button>
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
