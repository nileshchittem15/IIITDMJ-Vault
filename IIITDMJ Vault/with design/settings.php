<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title >Change Password-IIITDMJ Vault</title>
	</head>
	<body>
	<?php include('create.php');?>
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
										<a id ="home" href="settings.php">
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
			<td style="padding-right: 100px">
		    <div id="main-right">
				<?php
	

	echo '<form action="changepass_check.php" method="post"><table align="center" border="0" cellspacing="10">
		  <tr><td>Current Password<super>*</super></td><td><input type="password" name="cpass"></td></tr>
		  <tr><td>New Password<super>*</super></td><td><input type="password" name="npass"></td></tr>
		  <tr><td>Retype New Password<super>*</super></td><td><input type="password" name="rnpass"></td></tr>
		  <tr><td colspan="2" align="center"><input type="submit" class="freshbutton-blue" value="Change Password"></td></tr></table></form>';

?>
			</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
			hi my name is dont no
		</div>
		<script src="script_s.js"></script>
	</body>
</html>