<?php
	include("up.php");
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
	$rollno=$_SESSION['ROLLNO'];
	$_SESSION['$rollno']=$rollno;
	$qry='SELECT * FROM book_info WHERE rollno ="' .$rollno. '" ';
	$result=mysql_query($qry) or die(mysql_error());
	
	echo '<h1>The Book Dues are - </h1>';
	
	echo '<table border="1">
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Issue Date</th>
			<th>Due Date</th>
			<th>Return Date</th>
			<th>Due</th>
			';

	while ($row = mysql_fetch_assoc($result))
	{
		echo '<tr>
			<td>'.$row['bid'].'</td>
			<td>'.$row['bname'].'</td>
			<td>'.$row['issuedate'].'</td>
			<td>'.$row['duedate'].'</td>
			<td>'.$row['returndate'].'</td>
			<td>'.$row['due'].'</td>
			</tr>';
	}

	echo '</table>';

	$qry='SELECT due FROM book_due WHERE rollno ="' .$rollno. '" ';
	$result=mysql_query($qry) or die(mysql_error());

	while ($row = mysql_fetch_assoc($result))
	{
		$_SESSION['due']=$row['due'];
	}
	echo "Total Due:";
	echo $_SESSION['due'];
	echo '<br>';

	$Amount=0;
	$qry="SELECT due FROM book_info WHERE  rollno='$rollno' AND returndate is NOT NULL";
	$result=mysql_query($qry) or die(mysql_error());

	while ($row = mysql_fetch_assoc($result))
	{
		$Amount=$row['due']+$Amount;
	}
	$_SESSION['pdue']=$Amount;
	echo "Payable Due:";
	echo $Amount;
	echo '<br>';

?>

	<form action="book_check.php" method="post">
		<table cellpadding = "20">
				<tr>
					<td><input type="submit" name="submit" class="freshbutton-blue" value="paydue"></td>
				</tr>
			</table>
	</form>

<?php 
include("down.php");
?>