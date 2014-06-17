<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title >Profile-IIITDMJ Vault</title>

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
			<a href="signout.php" class="header-signout">SignOut</a>
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
								
								
																
								<tr id="menu2" style="background:#001628">
									<td>
										<a id ="home" href="profile.php">
											<table border="0">
												<tr>
													<td>
														<img id="image2"src="images/menu2_active.gif" >
													</td>
													<td id="text">
														<p >Profile</p>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								
								
								<tr id="menu3">
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
								
								
								<tr id="menu4">
									<td>
										<a id ="home" href="settings.php">
											<table border="0">
												<tr>
													<td>
														<img id="image4"src="images/menu4.gif" >
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
			<td  id="main-right-info">
		    <div >
				<table id="pinfo"  cellpadding="5">
					<tr>
						<td>
							<h2>
								Personal Information
							</h2>
						</td>
					</tr>
					<tr>
						<td>Full Name:</td><td class="ans"><?php echo $_SESSION['NAME']; ?></td>
					</tr>
					<tr>
						<td>Date of Birth</td><td class="ans"><?php echo $_SESSION['DOB']; ?></td>
					</tr>
					<tr>
						<td>Roll No</td><td class="ans"><?php echo $_SESSION['ROLLNO']; ?></td>
					</tr>
					<tr>
						<td>Discipline</td><td class="ans"><?php echo $_SESSION['PROGRAMME']; ?></td>
					</tr>
					<tr>
						<td>Year</td><td class="ans"><?php echo $_SESSION['YEAR']; ?></td>
					</tr>
					<tr>
						<td>Balance</td><td class="ans"><?php echo $_SESSION['BALANCE']; ?></td>
					</tr>
					<tr>
						<td>Father's Name</td><td class="ans"><?php echo $_SESSION['FATHER_NAME']; ?></td>
					</tr>
				</table>
				</td>
				<td>
				<table>
					<tr>
						<td style="padding-bottom: 200px">
							<image src="images/fb-user.jpg" width="320" height="240">
						</td>
					</tr>				
				</table>
			</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
		</div>
	<script src="script_p.js"></script>
	</body>
</html>