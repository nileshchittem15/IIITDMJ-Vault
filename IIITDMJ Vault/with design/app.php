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
	//Create query
	$qry='SELECT * FROM students WHERE ROLLNO ="' .$rollno. '" ';
	
	$result=mysql_query($qry) or die(mysql_error());
	if(!isset($_SESSION['start']))
	
	
	$_SESSION['$rollno']=$rollno;
	while ($row = mysql_fetch_assoc($result))
	{
		$_SESSION['name']=$row['NAME'];
		$_SESSION['f_name']=$row['FATHER_NAME'];
		$_SESSION['year']=$row['YEAR'];
		$_SESSION['branch']=$row['BRANCH'];
		$_SESSION['programme']=$row['PROGRAMME'];
	}

	if(!isset($_SESSION['appfor']))
		$_SESSION['appfor']=null;
	if(!isset($_SESSION['reason']))
		$_SESSION['reason']=null;
	if(!isset($_SESSION['category']))
	$_SESSION['category']=null;
	if(!isset($_SESSION['phone_no']))
	$_SESSION['phone_no']=null;
	if(!isset($_SESSION['room_no']))
	$_SESSION['room_no']=null;
	if(!isset($_SESSION['Hall']))
	$_SESSION['Hall']=null;
	if(!isset($_SESSION['page']))
	$_SESSION['page']='';
	
?>

<html>
	<body>
<a href="preapp.php" style="float: right;">view previous applications</a>

		<center>
			<h1>Application Form</h1>
			<form action="app_check.php" method="post">
			
			<table cellpadding = "10">
				<tr>
					<td>Application For*</td>
					<td><input type="text" name="appfor" maxlength="25" <?php echo "value='".$_SESSION['appfor']."'"; ?> placeholder="Application For"></td>
				</tr>

				<tr>
					<td>Reason*</td>
					<td><input type="text" name="reason" maxlength="25" <?php echo "value='".$_SESSION['reason']."'"; ?> placeholder="Reason"></td>
				</tr>
				
				<tr>
					<td>Roll No</td>
					<td><?php echo $_SESSION['$rollno'] ;?></td>
				</tr>
				
				<tr>
					<td>Name</td>
					<td><?php echo $_SESSION['name'] ;?></td>
				</tr>
				
				<tr>
					<td>Fathers Name</td>
					<td><?php echo $_SESSION['f_name'] ;?></td>
				</tr>
				
				<tr>
					<td>Year</td>
					<td><?php echo $_SESSION['year'] ;?></td>
				</tr>
				
				<tr>
					<td>Branch</td>
					<td><?php echo $_SESSION['branch'] ;?></td>
				</tr>
				
				<tr>
					<td>Programme</td>
					<td><?php echo $_SESSION['programme'] ;?></td>
				</tr>
				
				<tr>
					<td>Category*</td>
					<td><input type="text" name="category" maxlength="20" <?php echo "value='".$_SESSION['category']."'"; ?> placeholder="Category"></td>
				</tr>
				
				<tr>
					<td>Phone No*</td>
					<td><input type="text" name="phone_no" maxlength="10" <?php echo "value='".$_SESSION['phone_no']."'"; ?> placeholder="Phone No"></td>
				</tr>
				
				<tr>
					<td>Room NO*</td>
					<td><input type="text" name="room_no" maxlength="10" <?php echo "value='".$_SESSION['room_no']."'"; ?> placeholder="Room No"></td>
				</tr>
				
				<tr>
					<td>Hall*</td>
					<td><input type="text" name="Hall" maxlength="5" <?php echo "value='".$_SESSION['Hall']."'"; ?> placeholder="Hall"></td>
				</tr>
				
				<tr>
					<td>Date</td>
					<td><?php echo date('d/m/Y');?></td>
				</tr>
				
				
			</table>

			<table cellpadding = "20">
				<tr>
					<td><input type="submit" name="submit"  class="freshbutton-blue" value="submit"></td>
				</tr>
			</table>
			</form>
		</center>
	</body>
</html>

<?php
include("down.php");

?>