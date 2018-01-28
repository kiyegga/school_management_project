<?php
function checkFeilds(){
if(empty($_POST)===false){
	$Required_feilds=array('StudentNo','Student_name','Class','Term','Year');
	foreach($_POST as $KEY=>$value){
	if(empty($value) && in_array($KEY, $Required_feilds)===true){
		$errors[]="All fields with asterisk (stars) are required";
		break 1;

	}
}

}

print_r($errors);
}
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="joy_s_s";
$conn=mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);



function gradeNum($grade)
{
return trim(substr($grade,1));
}
function totalAggregate($grades){
			
    $aggrigate=0;
    foreach($grades as $g){
    //$d=trim(substr($g,1));
    $aggrigate=$aggrigate+$g;
 
	}
	return $aggrigate;
	
}
function getGrade($aggrigate){

	if($aggrigate>=8 && $aggrigate<=32){
		return 1; 
	 }else if($aggrigate>=33 && $aggrigate<=45){
		return 2; 
	 }elseif( $aggrigate>=46 && $aggrigate<=52){
		 return 3;
	 }elseif($aggrigate>=53 && $aggrigate<=72){
		return 4;
	 }else{
		 return "x";
	 }
	


}

function checkGrade($mark){
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="joy_s_s";
$conn=mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$gradecomment=array();
	$sql= "SELECT * FROM grade;"; 
	$result =mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
       if($mark>=$row["min"] && $mark<=$row["max"] ){
		  $gradecomment["grade"]=$row["grade"];
		  $gradecomment["comment"]=$row["comment"];       
	   }else{
		   continue;
	   }
	   return $gradecomment;
			
// totalAggregate();
}

	}
}


//echo (int)checkGrade(62)['grade'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script lang="javascript" type="text/javascript" src="js/secondary.js">
	</script>
	
</head>
<body>
	<div id="report_card">
	<form name="form1" methode="$_POST" action="">
	StudentNo*: <input type="text" name="StudentNo" id="StudentNo" value="" >
	Student Name*: <input type="text" name="Student_name" id="Student"><br><br>
	Class*:     <input type="text" name="Class" id="Class" >
	Term*:         <input type="text" name="Term" id="Term"><br><br>
	Year*:      <input type="text" name="Year" id="Year"><br><br>
	
</form>

	<table border="1">
		<tr>
			<th>SUBJECTS</th>
			<th>FULL MARKS</th>
			<th>MARKS ATTAINED</th>
			<th>AGGRIGATES</th>
			<th>COMMENTS</th>
		</tr>
		<?php
		
		// if(isset($_POST['StudentNo'])){
		// 	$studentno=$_POST['StudentNo'];
		// 	$studentno=preg_replace("#[^0-9a-z]#i","",$studentno);
		// }elseif($_POST['Student_name']){
		// 	$studentname=$_POST['Student_name'];
		// 	$studentname=preg_replace("#[^0-9a-z]#i","",$studentname);
		// }elseif($_POST['Class']){
		// 	$class=$_POST['Class'];
		// 	$class=preg_replace("#[^0-9a-z]#i","",$class);
		// }elseif($_POST['Term']){
		// 	$term=$_POST['Term'];
		// 	$term=preg_replace("#[^0-9a-z]#i","",$term);
		// 	}elseif($_POST['Year']){
		// 		$year=$_POST['Year'];
		// 		$year=preg_replace("#[^0-9a-z]#i","",$year);
		// 	}else {
		// 		continue;
			
		// 	}
		//WHERE Student_No='$_POST[StudentNo]' AND Student_Name='$_POST[Student_name]' AND Class='$_POST[Class]' AND Term='$_POST[Term]' AND Year='$_POST[Year]'
		if(isset($_POST['StudentNo']))
		
		$StudentNo=$_POST['StudentNo'];
		$studentname=$_POST['Student_name'];
		$class=$_POST['Class'];
		$term=$_POST['Term'];
		$year=$_POST['Year'];

		
          $sql= "SELECT Subject,Full_Marks, Marks FROM student_results WHERE Student_No LIKE '%$StudentNo%' AND Student_Name LIKE '%$studentname%' AND Class='$class' AND Term='$term' Year='$year' ;"; 
          $result =mysqli_query($conn, $sql);
		  $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
			$division=0;
			$grades=array();
			$best_eight=array();
			$sort_array=array();
          	while ($row = mysqli_fetch_assoc($result)) {
				//   $studentno=$row['StudentNo'];
				//   $studentname=$row['Student_Name'];
				//   $class=$row['Class'];
				//   $term=$row['Term'];
				//   $year=$row['Year'];
				$grades[]=$grade=checkGrade($row["Marks"])['grade'];
				$comment=checkGrade($row["Marks"])['comment'];
				if(substr(strtolower($row["Subject"]),0,7)=="english" ||substr(strtolower ($row["Subject"]),0,4)=="math")
				{
					$best_eight[]=gradeNum($grade);
					
				}else{
					$sort_array[]=gradeNum($grade);
					
				}
				
				
          		echo "<tr><td>". $row["Subject"]."</td><td>".$row["Full_Marks"]."</td><td>". $row["Marks"]."</td><td>".$grade."</td><td>". $comment."</td></tr>";
          	}
			  echo "</table>  <br />";
			  

			  if(in_array("9",$best_eight)){
				$division=$division +1;
			   }	
				sort($sort_array);
					for($x=0;$x<6;$x++){
						$best_eight[]=$sort_array[$x];
					}
					
					
					//$sort_array[$x]=$best_eight();
					// echo " <b>AGGREGATES</b> ";
				$total_agg=totalAggregate($best_eight);
			 echo "<b>AGGREGATES</b> ",$total_agg,"<br />";
			 echo "<b>DIVISION</b> ",getGrade($total_agg) + $division ;
             //echo $division;
			// echo 
			//  echo " <b> DIVISION</b> ";
			
			  //echo var_dump($best_eight)."<br/>";
			 //echo var_dump($sort_array)."<br/>"; 
          }else{
          	echo "0 results";
          }
		  $conn-> close();
	
	
		
	
		?>
	
	

	<h2>Grading</h2>
	<table border="1">
		<tr>
			<td>100-85</td>
			<td>84-75</td>
			<td>74-69</td>
			<td>69-65</td>
			<td>64-60</td>
			<td>59-55</td>
			<td>54-50</td>
			<td>49-45</td>
			<td>44-0</td>
		</tr>
		<tr>
			<td>D1</td>
			<td>D2</td>
			<td>C3</td>
			<td>C4</td>
			<td>C5</td>
			<td>C6</td>
			<td>P7</td>
			<td>P8</td>
			<td>F9</td>
		</tr>
	</table>
	
	<br>
	<br>
 </div>
	<input type="button" value="Grade" onclick="f1()" id="Grade">
	<input type="button" value="Print" onclick="PrintContent('el')" id="report_card">	
</body>
</html>