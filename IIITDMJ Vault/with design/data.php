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




	$pdate=DATE('Y-m-d');

	$qry="SELECT rollno,bid,duedate,returndate,DATEDIFF(returndate,duedate) AS diff1,DATEDIFF(DATE(NOW()),duedate) AS diff2 FROM book_info " ;
	$result=mysql_query($qry) or die(mysql_error());

	while ($row = mysql_fetch_assoc($result))
	{
		$ddate=$row['duedate'];
		$rdate=$row['returndate'];
		$diff1=$row['diff1'];
		$diff2=$row['diff2'];


		if($rdate==null)
		{
			if($pdate<=$ddate)
				$due=0;
			else
				$due=$diff2;
		}
		else
		{
			if($rdate<=$ddate)
				$due=0;
			else
				$due=$diff1;
		}

		$rollno=$row['rollno'];
		$bid=$row['bid'];

		$update = "UPDATE book_info SET due='$due' WHERE rollno=$rollno AND bid=$bid";
				
				$results = mysql_query($update);

				if($results == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo ' ';

	}

	$qry="DELETE from book_info WHERE due=0 AND returndate IS NOT NULL";
	$result=mysql_query($qry) or die(mysql_error());

	if($result == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo ' ';
?>