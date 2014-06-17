<?php
include('up.php');

	$rollno="'".$_SESSION['ROLLNO']."'";
	$link = mysql_connect('localhost','root','');
	//Check link to the mysql server
	if(!$link)
		{
		die('Failed to connect to server: ' . mysql_error());
		}
	//Select database
	$db = mysql_select_db('iiitdmjv');
	if(!$db){
	die("Unable to select database");
	}
	//Create query
	$update = "UPDATE hosteldue SET H_DUE=0 WHERE rollno=$rollno";
				
				$results = mysql_query($update);

				if($results == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo " ";
	$qry = 'SELECT ROLLNO,MONTH,P_DAYS,A_DAYS,T_DAYS,(A_DAYS*25) AS DUE,PAID FROM ATTENDANCE WHERE ROLLNO='.$_SESSION['ROLLNO'].' ';
	//Execute query
	$result = mysql_query($qry);
	$check1=0;
echo '<h1>HOSTEL attendance Info</h1>';
echo '<table border="1">
<th>Month</th>
<th>Total No. of Days</th>
<th>No. of Days Absent</th>
<th>No. of Days Present</th>
<th>DUE</th>
<th>PAID</th>';
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr>
<td>'.$row['MONTH'].'</td>
<td>'.$row['T_DAYS'].'</td>
<td>'.$row['P_DAYS'].'</td>
<td>'.$row['A_DAYS'].'</td>
<td>'.$row['DUE'].'</td>
<td>'.$row['PAID'].'</td>
</tr>';
$mnth="'".$row['MONTH']."'";
$due=$row['DUE'];
$paid=$row['PAID'];
if($paid=='NO')
{
$update = "UPDATE attendance SET DUE=$due WHERE rollno=$rollno AND MONTH=$mnth AND PAID='NO'";
				
				$results = mysql_query($update);

				if($results == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo " ";
}
}

$link = mysql_connect('localhost','root','');
	//Check link to the mysql server
	if(!$link)
		{
		die('Failed to connect to server: ' . mysql_error());
		}
	//Select database
	$db = mysql_select_db('iiitdmjv');
	if(!$db){
	die("Unable to select database");
	}
$qry = "SELECT * FROM HOSTELDUE WHERE rollno=$rollno";
$results = mysql_query($qry);
while ($row = mysql_fetch_assoc($results))
{ 
$_SESSION['H_DUE']=$row['H_DUE'];
}
echo '<tr><td></td><td></td><td></td><td>TOTAL DUES</td><td>'.$_SESSION['H_DUE'].'</td></tr>';

echo '<form action="hostelpay.php" method="post">
	<table cellpadding = "20">
	<tr>
	<td align=center><input type="submit" class="freshbutton-blue" name="submit" value="Pay Dues"></td>
	</tr>
	</table>
	</form>';

$_SESSION['hostelpay']=0;
$_SESSION['hostelconfirm']=0;
$_SESSION['hostelpassed']=0;
include('down.php');
?>