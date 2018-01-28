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
 <link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<!-- END: STYLESHEET -->
<script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
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
      <!--<div class="banner">
        <div class="banner_text">
          <h2>Records Management Simplified</h2>
          <p>This is a web application designed to suit your school. manage pupils record from whereever you are at anytime. Download our android app to simplify work the more... </p>
          <a href="#">Read more</a></div>
        <a href="#"><img src="images/banner.jpg" width="940" height="344" alt="banner img" /></a></div>-->
      
        
		<div id="accordion">
  <h3>Add New Payemt</h3>
  <div>
  <form action="" method="post" id="myforms" class="myform"  >
  <table border="0" cellspacing="20px">

			<tr><td>Pupil ID: </td> <td><input type="text" name="pID" placeholder="Pupil ID"  data-constraints='@NotEmpty @Required '/></td></tr>
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
			<tr><td>AMOUNT: </td> <td><input type="text" name="amount" placeholder="AMOUNT PAID"  data-constraints='@NotEmpty @Required '/></td></tr>
			<tr><td>BAL: </td> <td><input type="text" name="bal" placeholder="balance"  data-constraints='@NotEmpty @Required '/></td></tr>
			</table>
	  </form>
	  <button type="submit" form="myforms" value="Submit" >Save</button>
  </div>
 
  <h3>Update Payments</h3>
  <div >
   <form action="" method="post" id="myforms2" class="myform"  >
    <p>Transaction ID: <input type="text" name="txn_id" placeholder="Transaction ID" /> </p>
	<p>New Amount: <input type="text" name="nAmount" placeholder="Change amount to??" /> </p>
	 
	  </form>
	  <button type="submit" form="myforms2" value="Submit" >Save</button>
  </div>
  <h3>Delete Transactiont</h3>
  <div>
   <form action="" method="post" id="myforms3" class="myform"  >
    <p>Transaction ID: <input type="text" name="del_txn" placeholder="Transaction Number" /> </p>
	
	 
	  </form>
	  <button type="submit" form="myforms3" value="Submit" >Save</button>
  </div>


 <h3>View Fees LIst</h3>
  <div>
   <form action="fees list.php" method="post" id="myforms4" class="myform"  >
   <table border="0">
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
	  <button type="submit" form="myforms4" value="Submit" >Submit</button>
  </div>
        <div class="clear"></div>
    
    </div>
    <div class="clear"></div>
    <!-- content ends -->
    <div class="footer">
      <p>Copyright &copy; 2017 PRS. All rights reserved.  </p>
    </div>
  </div>
  <!-- main ends --> 
</div>
<!-- wrapper ends -->
</body>
</html>
<?php
include('connect_db.php');


######################################    adding new payement    ##############################3
if(isset($_POST['pID'])){

$txn_id = 'TXN'.rand(00001,30000);
$pID = $_POST['pID'];
$term = $_POST['term'];
$amount = $_POST['amount'];
$bal =$_POST['bal'];
$date= date("D/M/Y");

$insert = "INSERT INTO fees VALUES('$txn_id','$pID','$amount','$date','$bal','$term')";
$query =mysql_query($insert);
if(!$query){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Results Operation Failed')
				</SCRIPT>".mysql_error());
					

}else{


		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Operation Successful')
				</SCRIPT>");

}
}
##############################################################################################################

###########################################  Updating new balance  ###################################

if(isset($_POST['txn_id'])){

$update = "UPDATE fees SET amount = '".$_POST['nAmount']."' WHERE txn_id ='".$_POST['txn_id']."' ";
$query = mysql_query($update,$connect);
if(!$query){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Results Operation Failed')
				</SCRIPT>".mysql_error());
					

}else{


		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Operation Successful')
				</SCRIPT>");

}
}
###################################### end here #############################################################

if(isset($_POST['del_txn'])){
$delete = "DELETE FROM fees WHERE txn_id = '".$_POST['del_txn']."' ";
$query = mysql_query($delete,$connect);
if(!$query){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Results Operation Failed')
				</SCRIPT>".mysql_error());
					

}else{


		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Operation Successful')
				</SCRIPT>");

}
}



?>