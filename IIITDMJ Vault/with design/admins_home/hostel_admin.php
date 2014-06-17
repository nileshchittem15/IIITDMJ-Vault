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
		    
<?php
//Start the session to see if the user is authencticated user.
session_start();
//Check if the user is authenticated first. Or else redirect to login page
//Connect to mysql server
if(isset($_POST['submit']))
	{
		$date = '\''.$_POST['year'] . '-' . $_POST['month'] . '-' .$_POST['day'].'\'';
		$sroll=$_POST['searchroll'];
		if($_POST['submit']=='search')
			{
						if($_POST['year'] && $_POST['month'] && $_POST['day'])
						{
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
								//Create query
								$qry = "SELECT HOSTEL.DATE,HOSTEL.MONTH,HOSTEL.ROLLNO,STUDENTS.NAME FROM hostel,students WHERE DATE=$date AND HOSTEL.ROLLNO=STUDENTS.ROLLNO ORDER BY ROLLNO";
								//Execute query
								$result = mysql_query($qry);
								echo '<h1>Details of Payment on requested date '.$date.' are - </h1>';
								//Draw the table for Players
								echo '<table border="1">
								<th>DATE</th>
								<th>MONTH</th>
								<th>ROLLNO</th>
								<th>NAME</th>';
								//Show the rows in the fetched resultset one by one
								if($result)
								{
									while ($row = mysql_fetch_assoc($result))
										{ 
											echo '<tr>
											<td>'.$row['DATE'].'</td>
											<td>'.$row['MONTH'].'</td>
											<td>'.$row['ROLLNO'].'</td>
											<td>'.$row['NAME'].'</td></tr>';
										}
								}
								echo '<form action="hostel_admin.php" method="post">
								<tr ><td colspan=4 align=center><input type="submit" name="submit" value="back" class="freshbutton-blue "></td></tr></table>';
						}
						else 
						{
							header('location:hostel_admin.php');
							
						}
					}
			if( $_POST['submit'] == 'search by Rollno')
			{
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
					//Create query
					$qry = "SELECT HOSTEL.DATE,HOSTEL.MONTH,HOSTEL.ROLLNO,STUDENTS.NAME FROM hostel,students WHERE HOSTEL.ROLLNO=$sroll AND HOSTEL.ROLLNO=STUDENTS.ROLLNO";
					//Execute query
					$result = mysql_query($qry);
					echo '<h1>Details of booking on requested RolLno  '.$sroll.' are - </h1>';
					//Draw the table for Players
					echo '<table border="1">
					<th>DATE</th>
					<th>MONTH</th>
					<th>ROLLNO</th>
					<th>NAME</th>';
					//Show the rows in the fetched resultset one by one
					if($result)
					{
						while ($row = mysql_fetch_assoc($result))
							{ 
								echo '<tr>
								<td>'.$row['DATE'].'</td>
								<td>'.$row['MONTH'].'</td>
								<td>'.$row['ROLLNO'].'</td>
								<td>'.$row['NAME'].'</td></tr>';
							}
					}
					echo '<form action="hostel_admin.php" method="post">
					<tr ><td colspan=4 align=center><input type="submit" name="submit" value="back" class="freshbutton-blue "></td></tr></table>';

					}
					else if($_POST['submit']=='back')
					{
					$_POST['submit']=NULL;
					header('location:hostel_admin.php');
					}
	}


else
		{
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
		//Create query
		$qry = 'SELECT HOSTEL.DATE,HOSTEL.MONTH,HOSTEL.ROLLNO,STUDENTS.NAME FROM hostel,students WHERE DATE=DATE(NOW()) AND HOSTEL.ROLLNO=STUDENTS.ROLLNO ';
		//Execute query
		$result = mysql_query($qry);
		echo'<a href="hostel_due_insert.php">Click here to insert attendence</a>';
		echo '<h1>Todays Payment Details are Details are - </h1>';
		//Draw the table for Players
		echo '<table border="1">
		<th>DATE</th>
		<th>MONTH</th>
		<th>ROLLNO</th>
		<th>NAME</th>';
		//Show the rows in the fetched resultset one by one
		while ($row = mysql_fetch_assoc($result))
		{ 
			echo '<tr>
			<td>'.$row['DATE'].'</td>
			<td>'.$row['MONTH'].'</td>
			<td>'.$row['ROLLNO'].'</td>
			<td>'.$row['NAME'].'</td></tr>';
		}
		echo '</table>';

		echo 'If u want to know to know previous booking on dates';
		?>
		<form action="hostel_admin.php" method="post">
		<table cellpadding = "10" border="0">
		<tr>
		<td>Date of Due Payment</td>
		<td>Day<select name = "day">
		<option></option>'
		<?php
		for($i = 1; $i <= 31; $i++)
		{
			echo '<option value='.$i.'>'.$i.'</option>';
		}
		?>
		</select>
		<?php
		$months = array('01'=>'January', '02'=>'February',
		'03'=>'March', '04'=>'April', '05'=>'May',
		'06'=>'June', '07'=>'July', '08'=>'August',
		'09'=>'September','10'=>'October',
		'11'=>'November','12'=>'December');
		?>
		Month<select name = "month">
		<option></option>
		<?php 
		foreach($months as $num => $nm)
		{
			echo "<option value='$num'>$nm</option>";
		}
		?>
		</select>
		Year<select name = "year">
		<option></option>
		<?php
		for($i = date('Y')-2; $i <= date('Y'); $i++)
		{
			echo "<option value='$i'>$i</option>";
		}

		echo '
		</select>
		</td>
		</tr>
		<tr><td colspan="2" align="center">
		<input type="submit" name="submit" value="search" class="freshbutton-blue "></td></tr>
		<tr><td colspan="2" align="center"><input type="text" name="searchroll" placeholder="Rollno"></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" name="submit" value="search by Rollno" class="freshbutton-blue "></td></tr>';
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
