<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title >Bus Booking Details-IIITDMJ Vault</title>
	</head>
	<body>
	<?php
include('create.php');
	?>
		<div id="header">
			<div id="header1">
				<img id="logo" src="images/iiit.png">
				<h2 class="welcome">Welcome <span class="user"><?php echo $_SESSION['NAME']; ?></span></h2>
			</div>
			<a href=# class="header-faq">FAQs</a>
			<a href=# class="header-signout">SignOut</a>
		</div>
		
		<table id="main" >
			<tr>
			<td style="vertical-align:top">
			<div id="main-left" >
				<table id="left-table"  >
					
								<tr id="menu1">
									<td >
										<a id="home" href="home.php" >
											<table border="0" >
												<tr >
													<td>
														<img id="image1" src="images/menu1.gif" >
													</td>
													<td id="text">
														<p >Home</p>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								
								
																
								<tr id="menu2" >
									<td>
										<a id ="home" href="profile.php">
											<table border="0">
												<tr>
													<td>
														<img id="image2"src="images/menu2.gif" >
													</td>
													<td id="text">
														<p >Profile</p>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								
								
								<tr id="menu3" >
									<td>
										<a id ="home" href="account.php">
											<table border="0">
												<tr>
													<td>
														<img id="image3"src="images/menu3.gif" >
													</td>
													<td id="text">
														<p >Account</p>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								
								
								<tr id="menu4" style="background:#001628">
									<td>
										<a id ="home" href="#">
											<table border="0">
												<tr>
													<td>
														<img id="image4"src="images/menu4_active.gif" >
													</td>
													<td id="text">
														<p >Change Password</p>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								
								
								
								<tr id="menu5">
									<td>
										<a id ="home" href="signout.php">
											<table border="0">
												<tr>
													<td>
														<img id="image5"src="images/menu5.gif" >
													</td>
													<td id="text">
														<p >Sign Out</p>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								
								
									
				</table>
			
				
          </div>
			</td>
			<td style="padding-right: 100px;vertical-align: top;">
		    <div id="main-right">
<?php
			echo '<a href="bus2.php" style="color: red;float: right;">Click Here To Go Back To Booking</a></br></br>';
			echo '<h1>Your Previous Bus Booking Details<h1>';
						
			
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

			$qry='SELECT * FROM BUS WHERE ROLLNO='.$_SESSION['ROLLNO'].' ORDER BY DATE DESC';
			$result=mysql_query($qry);

			echo '<table border="1">
			
			<th>Roll No</th>
			<th>Date</th>
			<th>TIME</th>';
			while ($row = mysql_fetch_assoc($result))
			{
					echo ' <tr> 
						
						<td>'.$row['ROLLNO'].'</td>
						<td>'.$row['DATE'].'</td>
						<td>'.$row['TIME'].'</td>
						</tr>';
			}

			echo '</table>';

?>
</div></td></tr></table>
			</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
			
		</div>
		<script src="script_s.js"></script>
	</body>
</html>