<?php
session_start();

$term1= $_POST['cTerm'];
$term2 =$_POST['pTerm'];
$_SESSION['cTerm'] = ''.$term1.'';
$_SESSION['pTerm'] = ''.$term2.'';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>



<div style="margin:10px; padding-left:10px; border-radius:15px; background-color:#999999; color:#FFFFFF;">
<center><h2> GENERAL PERFORMANCE REVIEW</h2></center><BR /><BR />

<H4 style="color:yellow"> THIS TERM ANALYSIS</H4>


<?php 
include('connect_app_db.php');

$terms = $_SESSION['cTerm'];



echo ''.$_SESSION['cTerm'].'';
for ($x=1;$x <=7;$x++){
$class = 'P'.$x.'';
################################### Analysing F9 for all subjects   ###########################################
$mf9 = mysql_query("SELECT * FROM `results` WHERE marks >=0 AND marks <=35 AND term = '$terms' AND sCode = 'MATH' AND class ='$class'",$connect);
$nF9_math = mysql_num_rows($mf9);

$ef9 = mysql_query("SELECT * FROM `results` WHERE marks >=0 AND marks <=35 AND term = '$terms' AND sCode = 'ENG' AND class ='$class'",$connect);
$nF9_eng = mysql_num_rows($ef9);

$sf9 = mysql_query("SELECT * FROM `results` WHERE marks >=0 AND marks <=35 AND term = '$terms' AND sCode = 'SCI' AND class ='$class'",$connect);
$nF9_sci = mysql_num_rows($sf9);

$ssf9 = mysql_query("SELECT * FROM `results` WHERE marks >=0 AND marks <=35 AND term = '$terms' AND sCode = 'SST' AND class ='$class'",$connect);
$nF9_sst = mysql_num_rows($ssf9);

//echo $nF9_math,$nF9_eng,$nF9_sci,$nF9_sst;

######################################## Analysing all P8 results		###############################################
$mp8 = mysql_query("SELECT * FROM `results` WHERE marks >=35 AND marks <=39 AND term = '$terms' AND sCode = 'MATH' AND class ='$class'",$connect);
$nP8_math = mysql_num_rows($mp8);

$ep8 = mysql_query("SELECT * FROM `results` WHERE marks >=35 AND marks <=39 AND term = '$terms' AND sCode = 'ENG' AND class ='$class'",$connect);
$nP8_eng = mysql_num_rows($ep8);

$scp8 = mysql_query("SELECT * FROM `results` WHERE marks >=35 AND marks <=39 AND term = '$terms' AND sCode = 'SCI' AND class ='$class'",$connect);
$nP8_sci = mysql_num_rows($scp8);

$ssp8 = mysql_query("SELECT * FROM `results` WHERE marks >=35 AND marks <=39 AND term = '$terms' AND sCode = 'SST' AND class ='$class'",$connect);
$nP8_sst = mysql_num_rows($ssp8);


##################################### Analysing all P7 results ##################################################
$mp7 = mysql_query("SELECT * FROM `results` WHERE marks >=40 AND marks <=49 AND term = '$terms' AND sCode = 'MATH' AND class ='$class'",$connect);
$nP7_math = mysql_num_rows($mp7);

$ep7 = mysql_query("SELECT * FROM `results` WHERE marks >=40 AND marks <=49 AND term = '$terms' AND sCode = 'ENG' AND class ='$class'",$connect);
$nP7_eng = mysql_num_rows($ep7);

$scp7 = mysql_query("SELECT * FROM `results` WHERE marks >=40 AND marks <=49 AND term = '$terms' AND sCode = 'SCI' AND class ='$class'",$connect);
$nP7_sci = mysql_num_rows($scp7);

$ssp7 = mysql_query("SELECT * FROM `results` WHERE marks >=40 AND marks <=49 AND term = '$terms' AND sCode = 'SST' AND class ='$class'",$connect);
$nP7_sst = mysql_num_rows($ssp7);


################################### Analysing C6 #################################################################N

$mc6 = mysql_query("SELECT * FROM `results` WHERE marks >=50 AND marks <=54 AND term = '$terms' AND sCode = 'MATH' AND class ='$class'",$connect);
$nC6_math = mysql_num_rows($mc6);

$ec6 = mysql_query("SELECT * FROM `results` WHERE marks >=50 AND marks <=54 AND term = '$terms' AND sCode = 'ENG' AND class ='$class'",$connect);
$nC6_eng = mysql_num_rows($ec6);

$sc6 = mysql_query("SELECT * FROM `results` WHERE marks >=50 AND marks <=54 AND term = '$terms' AND sCode = 'SCI' AND class ='$class'",$connect);
$nC6_sci = mysql_num_rows($sc6);

$ssc6 = mysql_query("SELECT * FROM `results` WHERE marks >=50 AND marks <=54 AND term = '$terms' AND sCode = 'SST' AND class ='$class'",$connect);
$nC6_sst = mysql_num_rows($ssc6);


##################################### Analysing C5 ###############################################################
$mc5 = mysql_query("SELECT * FROM `results` WHERE marks >=55 AND marks <=59 AND term = '$terms' AND sCode = 'MATH' AND class ='$class'",$connect);
$nC5_math = mysql_num_rows($mc5);

$ec5 = mysql_query("SELECT * FROM `results` WHERE marks >=55 AND marks <=59 AND term = '$terms' AND sCode = 'ENG' AND class ='$class'",$connect);
$nC5_eng = mysql_num_rows($ec5);


$sc5 = mysql_query("SELECT * FROM `results` WHERE marks >=55 AND marks <=59 AND term = '$terms' AND sCode = 'SCI' AND class ='$class'",$connect);
$nC5_sci = mysql_num_rows($sc5);


$ssc5 = mysql_query("SELECT * FROM `results` WHERE marks >=55 AND marks <=59 AND term = '$terms' AND sCode = 'SST' AND class ='$class'",$connect);
$nC5_sst = mysql_num_rows($ssc5);


########################################## Analysing C4 #################################################
$mc4 = mysql_query("SELECT * FROM `results` WHERE marks >=60 AND marks <=69 AND term = '$terms' AND sCode = 'MATH' AND class ='$class'",$connect);
$nC4_math = mysql_num_rows($mc4);

$ec4 = mysql_query("SELECT * FROM `results` WHERE marks >=60 AND marks <=69 AND term = '$terms' AND sCode = 'ENG' AND class ='$class'",$connect);
$nC4_eng = mysql_num_rows($ec4);

$sc4 = mysql_query("SELECT * FROM `results` WHERE marks >=60 AND marks <=69 AND term = '$terms' AND sCode = 'SCI' AND class ='$class'",$connect);
$nC4_sci = mysql_num_rows($sc4);

$ssc4 = mysql_query("SELECT * FROM `results` WHERE marks >=60 AND marks <=69 AND term = '$terms' AND sCode = 'SST' AND class ='$class'",$connect);
$nC4_sst = mysql_num_rows($ssc4);


###################################### Analysing C3 ######################################################
$mc3 = mysql_query("SELECT * FROM `results` WHERE marks >=70 AND marks <=74 AND term = '$terms'  AND sCode = 'MATH' AND class ='$class'",$connect);
$nC3_math = mysql_num_rows($mc3);

$ec3 = mysql_query("SELECT * FROM `results` WHERE marks >=70 AND marks <=74 AND term = '$terms'  AND sCode = 'ENG' AND class ='$class'",$connect);
$nC3_eng = mysql_num_rows($ec3);

$sc3 = mysql_query("SELECT * FROM `results` WHERE marks >=70 AND marks <=74 AND term = '$terms'  AND sCode = 'SCI' AND class ='$class'",$connect);
$nC3_sci = mysql_num_rows($sc3);

$ssc3 = mysql_query("SELECT * FROM `results` WHERE marks >=70 AND marks <=74 AND term = '$terms'  AND sCode = 'SST' AND class ='$class'",$connect);
$nC3_sst = mysql_num_rows($ssc3);

#####################################  Analysing D2 #########################################################

$md2 = mysql_query("SELECT * FROM `results` WHERE marks >=75 AND marks <=79 AND term = '$terms' AND sCode = 'MATH' AND class ='$class'",$connect);
$nD2_math = mysql_num_rows($md2);

$ed2 = mysql_query("SELECT * FROM `results` WHERE marks >=75 AND marks <=79 AND term = '$terms' AND sCode = 'ENG' AND class ='$class'",$connect);
$nD2_eng = mysql_num_rows($ed2);


$sd2 = mysql_query("SELECT * FROM `results` WHERE marks >=75 AND marks <=79 AND term = '$terms' AND sCode = 'SCI' AND class ='$class'",$connect);
$nD2_sci = mysql_num_rows($sd2);


$ssd2 = mysql_query("SELECT * FROM `results` WHERE marks >=75 AND marks <=79 AND term = '$terms' AND sCode = 'SST' AND class ='$class'",$connect);
$nD2_sst = mysql_num_rows($ssd2);

########################################## D1 #############################################################
$md1 = mysql_query("SELECT * FROM `results` WHERE marks >=80 AND marks <=100 AND term = '$terms' AND sCode = 'MATH' AND class ='$class'",$connect);
$nD1_math = mysql_num_rows($md1);

$ed1 = mysql_query("SELECT * FROM `results` WHERE marks >=80 AND marks <=100 AND term = '$terms' AND sCode = 'ENG' AND class ='$class'",$connect);
$nD1_eng = mysql_num_rows($ed1);

$sd1 = mysql_query("SELECT * FROM `results` WHERE marks >=80 AND marks <=100 AND term = '$terms' AND sCode = 'SCI' AND class ='$class'",$connect);
$nD1_sci = mysql_num_rows($sd1);

$ssd1 = mysql_query("SELECT * FROM `results` WHERE marks >=80 AND marks <=100 AND term = '$terms' AND sCode = 'SST' AND class ='$class'",$connect);
$nD1_sst = mysql_num_rows($ssd1);



// outputting the table


echo '<h2> '.$class.'</h2>
<table border="1"  width="940px" style="margin-top:12PX" cellpadding="10px" align="center">

<tr><th>SUBJECT:</th><th>F9</th><th> P8</th><th> P7</th><th> C6</th><th>C5</th><th>C4</th><th>C3</th><th>D2</th><th> D1</th></tr>

<tr ><th>Math</th><td>'.$nF9_math.'</td><td>'.$nP8_math.'</td><td>'.$nP7_math.'</td><td>'.$nC6_math.'</td><td>'.$nC5_math.'</td><td>'.$nC4_math.'</td><td>'.$nC3_math.'</td><td>'.$nD2_math.'</td><td>'.$nD1_math.'</td></tr>

<tr ><th>English</th><td>'.$nF9_eng.'</td><td>'.$nP8_eng.'</td><td> '.$nP7_eng.'</td><td>'.$nC6_eng.'</td><td>'.$nC5_eng.'</td><td>'.$nC4_eng.'</td><td>'.$nC3_eng.'</td><td>'.$nD2_eng.'</td><td>'.$nD1_eng.'</td></tr>

<tr ><th>Science</th><td> '.$nF9_sci.'</td><td>'.$nP8_sci.'</td><td>'.$nP7_sci.'</td><td>'.$nC6_sci.'</td><td>'.$nC5_sci.'</td><td>'.$nC4_sci.'</td><td>'.$nC3_sci.'</td><td>'.$nD2_sci.'</td><td>'.$nD1_sci.'</td></tr>

<tr ><th>S.S.T</th><td>'.$nF9_sst.'</td><td> '.$nP8_sst.'</td><td> '.$nP7_sst.'</td><td>'.$nC6_sst.'</td><td>'.$nC5_sst.'</td><td>'.$nC4_sst.'</td><td>'.$nC3_sst.'</td><td>'.$nD2_sst.'</td><td>'.$nD1_sst.'</td></tr>

<tr ><th>TOTAL:</th><td>'.($nF9_sst+$nF9_sci+$nF9_eng+$nF9_math).'</td><td> '.($nP8_sst+$nP8_sci+$nP8_eng+nP8_math).'</td><td> '.($nP7_sst+$nP7_sci+$nP7_eng+$nC6_math).'</td><td>'.($nC6_sst+$nC6_sci+$nC6_eng+$nC6_math).'</td><td>'.($nC5_sst+$nC5_sci+$nC5_eng+$nC5_math).'</td><td>'.($nC4_sst+$nC4_sci+$nC4_eng+$nC4_math).'</td><td>'.($nC3_sst+$nC3_sci+$nC3_eng+$nC3_math).'</td><td>'.($nD2_sst+$nD2_math+$nD2_eng+$nD2_sci).'</td><td>'.($nD1_sst+$nD1_eng+$nD1_sci+$nD1_math).'</td></tr>

</table>
';

// Weighing subjects to identify the Best done
$math_score = (($nF9_math*0)+($nF8_math*1)+($nP7_math*2)+($nC6_math*3)+($nC5_math*4)+($nC4_math*5)+($nC3_math*6)+($nD2_math*7)+($nD1_math*8));
$eng_score = (($nF9_eng*0)+($nF8_eng*1)+($nP7_eng*2)+($nC6_eng*3)+($nC5_eng*4)+($nC4_eng*5)+($nC3_eng*6)+($nD2_eng*7)+($nD1_eng*8));

$sci_score = (($nF9_sci*0)+($nF8_sci*1)+($nP7_sci*2)+($nC6_sci*3)+($nC5_sci*4)+($nC4_sci*5)+($nC3_sci*6)+($nD2_sci*7)+($nD1_sci*8));

$sst_score = (($nF9_sst*0)+($nF8_sst*1)+($nP7_sst*2)+($nC6_sst*3)+($nC5_sst*4)+($nC4_sst*5)+($nC3_sst*6)+($nD2_sst*7)+($nD1_sst*8));
$scores = array("MATH" =>$math_score,"ENG" => $eng_score, "SCI" => $sci_score," SST" =>$sst_score);
$best = array_search(max($scores), $scores);
$worst = array_search(min($scores), $scores);
echo '<p style="color:yellow"><U>BEST DONE SUBJECT:</u></p>'.$best.'<BR/>';
echo '<p style="color:RED"><u>WORST DONE SUBJECT:</u></p>'.$worst;

echo '<hr/><hr/>';
///echo 'MATH='.$math_score ;
//echo 'ENG='.$eng_score;
//echo  'SCI='.$sci_score;
//echo 'SST'.$sst_score;
}
?>


<!--
<H4 style="color:yellow"> PREVIOUS TERM ANALYSIS</H4>
<table border="1"  width="940px" style="margin-top:12PX" cellpadding="10px" align="center">

<tr><th>SUBJECT:</th><th>F9</th><th> P8</th><th> P7</th><th> C6</th><th>C5</th><th>C4</th><th>C3</th><th>D2</th><th> D1</th></tr>
-->
<?php 
/*
include('analyser.php');



echo ''.$_SESSION['pTerm'].'
<tr ><th>Math</th><td>'.$nF9_math2.'</td><td>'.$nP8_math2.'</td><td>'.$nP7_math2.'</td><td>'.$nC6_math2.'</td><td>'.$nC5_math2.'</td><td>'.$nC4_math2.'</td><td>'.$nC3_math2.'</td><td>'.$nD2_math2.'</td><td>'.$nD1_math2.'</td></tr>

<tr ><th>English</th><td>'.$nF9_eng2.'</td><td>'.$nP8_eng2.'</td><td> '.$nP7_eng2.'</td><td>'.$nC6_eng2.'</td><td>'.$nC5_eng2.'</td><td>'.$nC4_eng2.'</td><td>'.$nC3_eng2.'</td><td>'.$nD2_eng2.'</td><td>'.$nD1_eng2.'</td></tr>

<tr ><th>Science</th><td> '.$nF9_sci2.'</td><td>'.$nP8_sci2.'</td><td>'.$nP7_sci2.'</td><td>'.$nC6_sci2.'</td><td>'.$nC5_sci2.'</td><td>'.$nC4_sci2.'</td><td>'.$nC3_sci2.'</td><td>'.$nD2_sci2.'</td><td>'.$nD1_eng2.'</td></tr>

<tr ><th>S.S.T</th><td>'.$nF9_sst2.'</td><td> '.$nP8_sst2.'</td><td> '.$nP8_sst2.'</td><td>'.$nC6_sst2.'</td><td>'.$nC5_sst2.'</td><td>'.$nC4_sst2.'</td><td>'.$nC3_sst2.'</td><td>'.$nD2_sst2.'</td><td>'.$nD1_eng2.'</td></tr>


';
*/
?>

<!--   </table>   -->
</div>
</body>
</html>
