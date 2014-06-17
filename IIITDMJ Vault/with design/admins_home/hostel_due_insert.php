<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title  >Hostel-IIITDMJ Vault</title>
	</head>
	<body>
		<div id="header">
			<div id="header1">
				<img id="logo" src="images/iiit.png">
				<h2 class="welcome">Welcome <span class="user"></span></h2>
			</div>
			<a href=# class="header-faq">FAQs</a>
			<a href="signout.php" class="header-signout">SignOut</a>
		</div>
		
		<table id="main" >
			<tr>
			<td style="vertical-align:top">
			
			</td>
			<td style="padding-right: 100px;height: 500px;">
		    <div id="main-right" style="padding-bottom: 0px;align-content: center;padding-right: 100px;padding-top: 10px;">
		    <center>
<h1>Student Hostel Attendance Registration/Updation Form</h1>
<?php
session_start();
if(isset($_POST['submit']))
	{
		if($_POST['submit']=="back to Insert")
		{
			$_POST['submit']="select Month";
			$backtoi=1;
		}
		if($_POST['submit']=='select Month')
			{
					if(isset($_POST['month']))
					{
					$_SESSION['month']=$_POST['month'];
					$month=$_SESSION['month'];
					}
					if(isset($_POST['totaldays']))
					{
					$_SESSION['totaldays']=$_POST['totaldays'];
					$totaldays=$_SESSION['totaldays'];
					}

			if($_SESSION['month'] && $_SESSION['totaldays'] || $backtoi==1)
				{
					
					
					echo '<form action="hostel_due_insert.php" method="post">
					<table cellpadding = "10">
					<tr>
					<td>Roll No*</td>
					<td><input type="text" name="rollno[]" maxlength="9"></td>
								
					<td>Absent Days</td>
					<td><input type="text" name="absdays[]" maxlength="2 "></td>
					</tr>
					<tr>
					<td>Roll No*</td>
					<td><input type="text" name="rollno[]" maxlength="9"></td>
								
					<td>Absent Days</td>
					<td><input type="text" name="absdays[]" maxlength="2"></td>
					</tr>
					<tr>
					<td>Roll No*</td>
					<td><input type="text" name="rollno[]" maxlength="9"></td>
								
					<td>Absent Days</td>
					<td><input type="text" name="absdays[]" maxlength="2"></td>
					</tr>
					<tr>
					<td>Roll No*</td>
					<td><input type="text" name="rollno[]" maxlength="9"></td>
								
					<td>Absent Days</td>
					<td><input type="text" name="absdays[]" maxlength="2"></td>
					</tr>
					<tr>
					<td>Roll No*</td>
					<td><input type="text" name="rollno[]" maxlength="9"></td>
								
					<td>Absent Days</td>
					<td><input type="text" name="absdays[]" maxlength="2"></td>
					</tr>
					<tr>
					<td colspan=4 align="center">
					<input type="submit" name="submit" value="Insert" class="freshbutton-blue ">
					</td></tr></table></form>';
					echo '<a href="hostel_due_insert.php" >Click here to go back</a>';
				}
			else
				{
					header('location:hostel_due_insert.php');
				}
			}
		if($_POST['submit']=="Insert")
		{
			$month=$_SESSION['month'];
			$totaldays=$_SESSION['totaldays'];
			$absdays=$_POST['absdays'];
			$rollno=$_POST['rollno'];
			$link = mysql_connect('localhost', 'root','');
			//Check link to the mysql server
			
			if(!$link)
			{
				die('Failed to connect to server: ' . mysql_error());
			}
			//Select database
			$db = mysql_select_db('iiitdmjv');
			if(!$db)
			{
				die("Unable to select database");
			}
			for($i=0;$i<count($absdays);$i++)
			{
					
				if($rollno[$i] && $absdays[$i])
				{
					
					$qry = "INSERT INTO attendance(rollno,month,T_DAYS,A_DAYS,P_DAYS,DUE) VALUES ($rollno[$i],$month,$totaldays,$absdays[$i],$totaldays-$absdays[$i],$absdays[$i]*25)";
					//Execute query
					$result = mysql_query($qry);
						
				}
			}
			echo '<center><h4>Data Inserted Succesfully</h4></center>';
			echo '<form action="hostel_due_insert.php" method="post">
			<input type="submit" name="submit" value="back to Insert" class="freshbutton-blue "></form>';
			echo '<a href="hostel_due_insert.php" >Click here to go back</a>';

		}

	}
	
		
	
else
{
	?>
<form action="hostel_due_insert.php" method="post">
<table cellpadding = "10">
<tr>
<td>
<?php
	$months = array('01'=>'January', '02'=>'February',
	'03'=>'March', '04'=>'April', '05'=>'May',
	'06'=>'June', '07'=>'July', '08'=>'August',
	'09'=>'September','10'=>'October',
	'11'=>'November','12'=>'December');
?>
	Month
	<select name = "month">
	<option></option>
<?php 
	foreach($months as $num => $nm)
	{
	echo "<option value='$num'>$nm</option>";
	}

?>
</td>
</tr>
</table>
	
<table cellpadding = "20">
<tr>
<td>Total Days :</td>
<td><input type="number" name="totaldays"></td>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="select Month" class="freshbutton-blue "></td>
</tr>
</table>
</form>
<a href="hostel_admin.php" >Click here to go back</a>
</center>
</body>
</html>
<?php
}
?>
</div>
			</td>
			</tr>
		</table>
			
			</div>
			</td>
			</tr>
		</table>
		</center>
		<div id="footer">
			
		</div>
		<script src="script.js"></script>
	</body>
</html>
