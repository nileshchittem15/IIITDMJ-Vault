<?php
	
include('up.php');
	$id=$_GET['id'];
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

			$qry='SELECT * FROM app WHERE id="' .$id.'"';
			$result=mysql_query($qry);

			while ($row = mysql_fetch_assoc($result))
			{
				$fora=$row['fora'];
				$reason=$row['reason'];
				$date=$row['date'];
				$category=$row['category'];
				$phone_no=$row['phone_no'];
				$room_no=$row['room_no'];
				$Hall=$row['Hall'];
			}

?>

<html>
	<body>

		<center>
			<h1>Application Form</h1>
			
			
			<table cellpadding = "10">
				<tr>
					<td>Application For*</td>
					<td> <?php echo $fora; ?> </td>
				</tr>

				<tr>
					<td>Reason*</td>
					<td><?php echo $reason; ?> </td>
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
					<td><?php echo $category; ?> </td>
				</tr>
				
				<tr>
					<td>Phone No*</td>
					<td><?php echo $phone_no; ?> </td>
				</tr>
				
				<tr>
					<td>Room NO*</td>
					<td><?php echo $room_no; ?> </td>
				</tr>
				
				<tr>
					<td>Hall*</td>
					<td><?php echo $Hall; ?> </td>
				</tr>
				
				<tr>
					<td>Date</td>
					<td><?php echo $date;?></td>
				</tr>
				
				
			</table>

	<a href="app.php">Click here to Go Back</a>
		</center>
	</body>
</html>

<?php
include('down.php');

?>

