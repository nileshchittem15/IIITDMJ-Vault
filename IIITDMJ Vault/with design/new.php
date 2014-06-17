<?php
	$link = mysql_connect('localhost', 'root', '');
	//Check link to the mysql server
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	//Select database
	$db = mysql_select_db('iiitdmjv');
	if(!$db) {
	die("Unable to select database");
	}
	
	//Create query
	$qry='SELECT * FROM students ';
	
	$result=mysql_query($qry) or die(mysql_error());
	
	
	
	while ($row = mysql_fetch_assoc($result))
	{
		$rollno=$row['ROLLNO'];
		$qry2="INSERT INTO hosteldue(ROLLNO,H_DUE)  VALUES ($rollno,0)";
		$result2=mysql_query($qry2) or die(mysql_error());
	}
?>