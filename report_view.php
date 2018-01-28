<?php
session_start()

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/morris.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/raphael-min.js"></script>
  <script src="js/morris.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="js/loader.js"></script>
<title>Reports</title>
</head>

<body>
<?php
include('connect_db.php'); //include script to connect database

$pID = $_POST['pID'];
$term = $_POST['term'];
$bal = '';
$usertype = $_SESSION['user_type'];

################## identify predvius term #######################
$break1 = explode('/',$term,3);  //extracting term 
$break2 = explode(' ',$break1[0],3);

if($break2[1] == 'III'){
$prev_term = 'TERM II/'.$break1[1];
}elseif($break2[1] == 'II'){

$prev_term = 'TERM I/'.$break1[1];

}else{
$prev_term ='';
}


########################### ends here  ###############################
//echo $prev_term;
//echo $usertype;
//$_SESSION['cTerm'] = ''.$term.'';
//echo $pID;
//echo $term;

// verify fees payemt status
$balance ="SELECT * FROM fees WHERE pID='$pID' AND term='$term'";
			 $query=mysql_query( $balance);
			 while($row = mysql_fetch_array($query)){
			 $bal =$row['bal'];
			 $amount = $row['Amount'];
			 
			 }
if($usertype == 'parent' ){

		if($bal  >0){
die ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Sorry, Fees for this term due')
   window.location.href='fees card.php';
    </SCRIPT>");
	
	}

}

// fetching student particulars from database
$query =mysql_query("SELECT * FROM student WHERE sID='$pID'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						
						$pName = $row['sName'];
						$pClass = $row['class'];
						$parent = $row['parent'];
						
						}
// Fetching results for Math
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='MATH'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$math = $row['marks'];
						$rMath = $row['remarks'];						
						}						
// Fetching results for phy
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='PHY'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$phy = $row['marks'];
						$rPhy = $row['remarks'];
						//echo $phy;						
						}						
// Fetching results for bio
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='BIO'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$bio = $row['marks'];
						$rBio = $row['remarks'];
						//echo $bio;						
						}
// Fetching results for ENG
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='ENG'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$eng = $row['marks'];
						$rEng=$row['remarks'];
						//echo $eng;						
						}	
// Fetching results for chem
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='CHEM'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$chem = $row['marks'];
						$rChem = $row['remarks'];
						//echo $chem;						
						}
// Fetching results for lug
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='LUG'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$lug = $row['marks'];
						$rLug = $row['remarks'];
						//echo $lug;						
						}
// Fetching results for cre
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='CRE'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$cre = $row['marks'];
						$rCre = $row['remarks'];
						//echo $cre;						
						}
// Fetching results for kis
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='KIS'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$kis = $row['marks'];
						$rKis = $row['remarks'];
						//echo $kis;						
						}
// Fetching results for fre
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='FRE'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$fre = $row['marks'];
						$rFre = $row['remarks'];
						//echo $fre;						
						}
// Fetching results for art
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='ART'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$art = $row['marks'];
						$rArt = $row['remarks'];
						//echo $art;						
						}
// Fetching results for acc
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='ACC'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$acc = $row['marks'];
						$rAcc = $row['remarks'];
						//echo $acc;						
						}
// Fetching results for com
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='COM'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$com = $row['marks'];
						$rCom = $row['remarks'];
						//echo $com;						
						}
###################################### previus term results starts  ######################################33							
	// totaling up marks			
				$total += ($eng+$math+$phy+$chem+$bio+$cre+$acc+$com+$lug+$kis+$fre+$art);
		// Fetching results for Math
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='MATH'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$math2 = $row['marks'];
						$rMath = $row['remarks'];						
						}						
// Fetching results for phy
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='PHY'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$phy2 = $row['marks'];
						$rPhy = $row['remarks'];
						//echo $phy;						
						}						
// Fetching results for bio
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='BIO'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$bio2 = $row['marks'];
						$rBio = $row['remarks'];
						//echo $bio;						
						}
// Fetching results for ENG
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='ENG'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$eng2 = $row['marks'];
						$rEng=$row['remarks'];
						//echo $eng;						
						}	
// Fetching results for chem
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='CHEM'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$chem2 = $row['marks'];
						$rChem = $row['remarks'];
						//echo $chem;						
						}
// Fetching results for lug
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='LUG'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$lug2 = $row['marks'];
						$rLug = $row['remarks'];
						//echo $lug;						
						}
// Fetching results for cre
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='CRE'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$cre2 = $row['marks'];
						$rCre = $row['remarks'];
						//echo $cre;						
						}
// Fetching results for kis
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='KIS'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$kis2 = $row['marks'];
						$rKis = $row['remarks'];
						//echo $kis;						
						}
// Fetching results for fre
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='FRE'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$fre2 = $row['marks'];
						$rFre = $row['remarks'];
						//echo $fre;						
						}
// Fetching results for art
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='ART'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$art2 = $row['marks'];
						$rArt = $row['remarks'];
						//echo $art;						
						}
// Fetching results for acc
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='ACC'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$acc2 = $row['marks'];
						$rAcc = $row['remarks'];
						//echo $acc;						
						}
// Fetching results for com
$query =mysql_query("SELECT * FROM results WHERE sID='$pID' AND term='$term' AND sCode='COM'",$connect);
		
						while( $row=mysql_fetch_array($query)){
						$com2= $row['marks'];
						$rCom = $row['remarks'];
						//echo $com;						
						}
				
				$total2 += ($eng2+$math2+$phy2+$chem2+$bio2+$cre2+$acc2+$com2+$lug2+$kis2+$fre2+$art2);
				
				//echo $total.'/'.$total2;
########################################################### previous ends here#########################


				
				############################## computing aggregate #######################################
				function grade($marks){
				if($marks <= 0){
				$grade = 'Missed';
				return $grade;
				
				}elseif($marks > 0 and $marks <= 34){
				$grade = 'F9';
				return $grade;
				}elseif($marks >= 35 and $marks <= 39){
				
				$grade = 'P8';
				return $grade;
				}elseif($marks >= 40 and $marks <= 49){
				
				$grade = 'P7';
				return $grade;
				
				
				}elseif($marks >= 50 and $marks <= 54){
				
				$grade = 'C6';
				return $grade;
				
				
				}elseif($marks >= 55 and $marks <= 59){
				
				$grade = 'C5';
				return $grade;
				
				
				}elseif($marks >= 60 and $marks <= 69){
				
				$grade = 'C4';
				return $grade;
				
				
				}elseif($marks >= 70 and $marks <= 74){
				
				$grade = 'C3';
				return $grade;
				
				
				}elseif($marks >= 75 and $marks <= 79){
				
				$grade = 'D2';
				return $grade;
				
				
				}elseif($marks >= 80 and $marks <= 100){
				
				$grade = 'D1';
				return $grade;
				
				
				}
				
				
				}
		#################################### Grading function ends here ##########################
				//echo grade($eng);
						
?>



<div align="center"> 

<h1> <b>MUGWANYA SUMMIT COLLEGE </b></h1>
<h4>Email:mugwanyasummitcollege@gmail.com</h4>
<h5>Tel:+256755218343 & +256782465792</h5>
<h5> P.O.BOX 60 NATETE</h5>
<br /><br />

<label style="background-color:#333333; border-radius:10px; color:#FFFFFF; padding:20px; ">
<b> TERMLY REPORT </b> </label>

<br /><br />

<?php

echo '
<table border="0" cellspacing="12px" style="margin-top:12PX" cellpadding="5px">
<tr><td><b>PUPIL\'S NAME:</b></td><td> '.$pName.'</td><td><b> TERM:</b></td><td> '.$term.' </td><td><b> CLASS:</b></td><td> '.$pClass.' </td><td><b> POSITION:</b></td><td> '.$pClass.' </td></tr>

</table>

<table border="1"  width="940px" style="margin-top:12PX" cellpadding="10px">
<tr><th>SUBJECT</th><th> FULL MARKS </th><th> MARKS GAINED</th><th> AGGR</th><th> REMARKS </th><th> INITIALS </th></tr>

<tr><th>ENGLISH</th><td> 100 </td><td> '.$eng.'</td><td>'.grade($eng).'</td><td> '.$rEng.' </td><td> 	 </td></tr>
<tr><th>MATHEMATICS</th><td> 100 </td><td> '.$math.'</td><td> '.grade($math).'</td><td> '.$rMath.' </td><td> 	 </td></tr>
<tr><th>PHYSICS</th><td> 100 </td><td> '.$phy.'</td><td> '.grade($phy).'</td><td> '.$rPhy.' </td><td> 	 </td></tr>
<tr><th>BIOLOGY</th><td> 100 </td><td> '.$bio.'</td><td> '.grade($bio).'</td><td> '.$rBio.' </td><td> 	 </td></tr>
<tr><th>CHEMISTRY</th><td> 100 </td><td> '.$chem.'</td><td> '.grade($chem).'</td><td> '.$rChem.' </td><td> 	 </td></tr>
<tr><th>CHRISTIAN RELIGIOUS EDUCATION</th><td> 100 </td><td> '.$cre.'</td><td> '.grade($cre).'</td><td> '.$rCre.' </td><td> 	 </td></tr>
<tr><th>LUGANDA</th><td> 100 </td><td> '.$lug.'</td><td> '.grade($lug).'</td><td> '.$rLug.' </td><td> 	 </td></tr>
<tr><th>KISWAHIL</th><td> 100 </td><td> '.$kis.'</td><td> '.grade($kis).'</td><td> '.$rKis.' </td><td> 	 </td></tr>
<tr><th>FRENCH</th><td> 100 </td><td> '.$fre.'</td><td> '.grade($fre).'</td><td> '.$rFre.' </td><td> 	 </td></tr>
<tr><th>ART</th><td> 100 </td><td> '.$art.'</td><td> '.grade($art).'</td><td> '.$rArt.' </td><td> 	 </td></tr>
<tr><th>ACCOUNTS</th><td> 100 </td><td> '.$acc.'</td><td> '.grade($acc).'</td><td> '.$rAcc.' </td><td> 	 </td></tr>
<tr><th>COMMERCE</th><td> 100 </td><td> '.$com.'</td><td> '.grade($com).'</td><td> '.$rCom.' </td><td> 	 </td></tr>
<tr><th>TOTAL</th><th> 1200 </th><th> '.$total.'</th><th> </th><td>  </td><td> 	 </td></tr>
</table>


</div>   ';
?>
<p style="margin:25px"> 
CLASS TEACHER REPORT:.............................................................................................................................<br />
CLASS TEACHER REMARKS:.........................................................................................................................<br />
NEXT TERM STARTS:...............<I>Read circular</I>..................................................................................................

</p>

<table border="1"  width="940px" style="margin-top:12PX" cellpadding="10px" align="center">
<tr ><th></th><td> 0-34</td><td> 35-39</td><td> 40-49</td><td> 50-54</td><td>55-59</td><td>60-69</td><td>70-74</td><td>75-79</td><td> 80-100</td></tr>


<tr><th>Grading:</th><td> F9</td><td> P8</td><td> P7</td><td> C6</td><td>C5</td><td>C4</td><td>C3</td><td>D2</td><td> D1</td></tr>

</table>






<div style="margin:10px; padding-left:10px; border-radius:15px; background-color:#999999; color:#FFFFFF;">
<center><h2> GENERAL PERFORMANCE REVIEW</h2></center><BR /><BR />



<?php

// Fetching best performed subject

$sql = mysql_query("SELECT * FROM results WHERE sID ='$pID' AND term ='$term'  ORDER BY marks DESC LIMIT 1",$connect);

while($row = mysql_fetch_assoc($sql))     
{
   
    $subject = $row['sCode'];
    $marks = $row['marks'];
   

    echo '<strong><u>Best performed Subject:</u></strong>  <h3 style="color:yellow">       '.$subject.' </h3>      <b>With  </b>'.$marks.'%<br/><br/>';
    
} 


// Fetching worst performed subject

$sql2 = mysql_query("SELECT * FROM results  WHERE sID ='$pID' AND term ='$term' ORDER BY marks ASC LIMIT 1",$connect);

while($row = mysql_fetch_assoc($sql2))     
{
   
    $subject = $row['sCode'];
    $marks = $row['marks'];
   

    echo '<strong><u>Worst performed Subject:</u></strong>    <h3 style="color:red">       '.$subject.'    </h3>     <b>With  </b>'.$marks.'%<br/><br/> ';
    
} 

 
$key = $prev_term;
$key2 =$total2;


for($x=1;$x<=2; $x++){


$chart_data .= "{term:'".$key."', total:".$key2.",}, ";
 
$key = $term;
$key2 =$total;
}
?>

<h3 style="color:#FFFFFF" align="center"> TERM COMPARISIONS </h3>
<div id="chart" style="background-color:#FFFFFF"></div>
</div>
</body>
</html>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'term',
 ykeys:['total'],
 labels:['Total Scores'],
 hideHover:'auto',

});
</script>