<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title >Account-IIITDMJ Vault</title>
	</head>
	<body>
	<?php include('create.php');?>
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
								
								
								<tr id="menu3" style="background:#001628">
									<td>
										<a id ="home" href="account.php">
											<table border="0">
												<tr>
													<td>
														<img id="image3"src="images/menu3_active.gif" >
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
			<td style="vertical-align:top">
		    <div id="main-right-account" >
				<table id="table-account" >
					
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							<h2>Your Transactions</h2>
						</td>
					</tr>
				
					<tr>
						<td>
						<?php
							mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
							mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
							$query2="SELECT * FROM trans WHERE ROLLNO=".$_SESSION['ROLLNO']." ORDER BY date DESC";
							$result2=mysql_query($query2);
							echo '<table border="0" cellspacing="25" class="last5">';
							while($row2=mysql_fetch_assoc($result2))
							{
								
								echo '<tr><td>'.$row2['date'].'</td><td>'.$row2['toa'].'</td><td>'.$row2['name'].'</td><td class="ans">Rs.'.$row2['amount'].'</td></tr>';
							}
							echo '</table>';
						?>
						</td>
						<!--<td>
							Library
						</td>
						<td class="ans">
							Rs.150
						</td>
					</tr>
					<tr>
						<td>
							Bus
						</td>
						<td class="ans">
							Rs.10
						</td>
					</tr>
					<tr>
						<td>
							T-Shirt
						</td>
						<td class="ans">
							Rs.150
						</td>
					</tr>
					
					<tr>
						<td>
							Android WorkShop
						</td>
						<td class="ans">
							Rs.750
						</td>
					</tr>
					
					<tr>
						<td>
							Academic 
						</td>
						<td class="ans">
							Rs.50
						</td>-->
					</tr>
					
				</table>
			</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
		</div>
		<script src="script_a.js"></script>
	</body>
</html>