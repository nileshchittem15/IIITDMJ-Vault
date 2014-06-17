<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title  >Home-IIITDMJ Vault</title>
	</head>
	<body>
	<?php
		include('create.php');
		include('data.php');
		include('data.php');
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
					
								<tr id="menu1" style="background:#001628;height: 70px;">
									<td >
										<a class="home" href="home.php" >
											<table border="0" >
												<tr >
													<td>
														<img  src="images/menu1_active.gif" >
													</td>
													<td id="text">
														<p >Home</p>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								
								
																
								<tr id="menu2">
									<td>
										<a class="home" href="profile.php">
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
								
								
								<tr id="menu3">
									<td>
										<a class ="home" href="account.php">
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
										<a class ="home" href="settings.php">
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
										<a class ="home" href="signout.php">
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
								<tr><td style="background-color: white;padding-top: 50px;padding-bottom: 50px;padding-left: 50px;">
									
									Balance : RS.<?php echo $_SESSION['BALANCE']?>

								</td></tr>
								
								
									
				</table>
			
				
          </div>
			</td>
			<td style="padding-right: 100px">
		    <div id="main-right">
				<table id="right-table"  >
					<tr>
						<td>
							<article class="col1">
								<div class="box1">
									<div class="box1_bot">
										<div class="box1_top">
											<div class="pad">
												<div class="pad1">
													<h2 class="center">
														<span id="library">Library</span>
													</h2>
													
													<p><br>Know Your Library Info And Pay Dues<br>Library DUE :<span class="homeans">Rs.<?php echo $_SESSION['L_DUE'];?><br></p>
													
													<div class="wrapper center"> 
														<a href="book.php" class="button">
															<span class="more">More</span>
																
														</a> 
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							
						</td>
						
						<td>
							<article class="col1">
								<div class="box1">
									<div class="box1_bot">
										<div class="box1_top">
											<div class="pad">
												<div class="pad1">
													<h2 class="center">
														<span id="library">Hostel</span>
													</h2>
													
													<p>Know Your Hostel Atendance,Dues And Pay Dues HOSTEL DUE :<span class="homeans">Rs.<?php echo $_SESSION['H_DUE'];?></span><br>HOSTEL FINE :<span class="homeans"> Rs.<?php echo $_SESSION['H_FINE'];?></span></p>
													
													<div class="wrapper center"> 
														<a href="hostel.php" class="button">
															<span class="more">More</span>
																
														</a> 
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							
						</td>
						
						<td>
							<article class="col1">
								<div class="box1">
									<div class="box1_bot">
										<div class="box1_top">
											<div class="pad">
												<div class="pad1">
													<h2 class="center">
														<span id="library">Bus</span>
													</h2>
													
													<p>Book Your Bus Tickets For Today<br><br><br></p>
													
													<div class="wrapper center"> 
														<a href="bus2.php" class="button">
															<span class="more">More</span>
																
														</a> 
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							
						</td>
					</tr>
					
					<tr>
					
						<td>
							<article class="col1">
								<div class="box1">
									<div class="box1_bot">
										<div class="box1_top">
											<div class="pad">
												<div class="pad1">
													<h2 class="center">
														<span id="library">Buy Shirts</span>
													</h2>
													
													<p><br><br>Buy Your T-Shirts Here<br><br></p>
													
													<div class="wrapper center"> 
														<a href="shirts.php" class="button">
															<span class="more">More</span>
																
														</a> 
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							
						</td>
						
						<td>
							<article class="col1">
								<div class="box1">
									<div class="box1_bot">
										<div class="box1_top">
											<div class="pad">
												<div class="pad1">
													<h2 class="center">
														<span id="library">Workshops</span>
													</h2>
													
													<p><br>Check and Enroll For On Going Workshops In the Institute.<br></p>
													
													<div class="wrapper center"> 
														<a href="workshop.php" class="button">
															<span class="more">More</span>
																
														</a> 
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							
						</td>
						
						
						<td>
							<article class="col1">
								<div class="box1">
									<div class="box1_bot">
										<div class="box1_top">
											<div class="pad">
												<div class="pad1">
													<h2 class="center">
														<span id="library">Academic</span>
													</h2>
													
													<p><br>Apply For Bonafide,and Pay the Amount Here<br><br></p>
													
													<div class="wrapper center"> 
														<a href="app.php" class="button">
															<span class="more">More</span>
																
														</a> 
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
							
						</td>
					</tr>
				</table>
			</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
		</div>
		<script src="script.js"></script>
	</body>
</html>