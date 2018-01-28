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
       <!-- <div class="banner_text">
          <h2>Records Management Simplified</h2>
          <p>This is a web application designed to suit your school. manage pupils record from whereever you are at anytime. Download our android app to simplify work the more... </p>
          <a href="#">Read more</a></div>
        <a href="#"><img src="images/banner.jpg" width="940" height="344" alt="banner img" /></a></div>-->
      <div class="content1">
        
		<div align="center" class="myform">
		<h2><i>Request for Report</i></h2>
							
							
							
			<form action="report_view.php" method="post" id="myforms" onsubmit="return validateForm();" enctype="multipart/form-data" >				
			<table border="0" cellspacing="20px">

			<tr><td>Pupil ID: </td> <td><input type="text" name="pID" placeholder="Pupil ID" data-constraints='@NotEmpty @Required '/></td></tr>
			<tr><td>Term: </td> <td><select name="term" >
										<option value=""> -- Select Term --</option>
										<option value="TERM I/2017"> TERM I/2017</option>
										<option value="TERM II/2017"> TERM II/2017</option>
										<option value="TERM III/2017"> TERM III/2017</option>
										<option value="TERM I/2018"> TERM I/2018</option>
										<option value="TERM II/2018"> TERM II/2018</option>
										<option value="TERM III/2018"> TERM III/2018</option>
										<option value="TERM I/2019"> TERM I/2019</option>
										<option value="TERM II/2019"> TERM II/2019</option>
										<option value="TERM III/2019"> TERM III/2019</option>
										<option value="TERM I/2020"> TERM I/2020</option>
										<option value="TERM II/2020"> TERM II/2020</option>
										<option value="TERM III/2020"> TERM III/2020</option>
										</select></td></tr>
			
			</table>
			
			</form>
			<button type="submit" form="myforms" value="Submit" class="button">Submit</button>
			
			
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
    <!-- content ends -->
    <div class="footer">
      <p>Copyright @2018 ORMS. All rights reserved.  </p>
    </div>
  </div>
  <!-- main ends --> 
</div>
<!-- wrapper ends -->
</body>
</html>
