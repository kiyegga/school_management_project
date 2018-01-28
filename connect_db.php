<?php

 $connect=mysql_connect('localhost','root','');
 
 if(!$connect){
 
 die('Unable to connect to the database server');
 
 }else{
 
 $query= mysql_select_db('orms',$connect);
 	if(!$query){
	die('Unable to connect to the database server'.mysql_error());
	}
 } 
 
 /*
 $pdo = new PDO('mysql:host=localhost;dbname=id1071344_prs', 'id1071344_prs', '12345');
if(!$pdo){
	die('Unable to connect to the database server'.mysql_error());
	}
	*/

?>