<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title  >Home-IIITDMJ Vault</title>
	</head>
	<body>
	<?php
		include('create.php');
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
			<td style="padding-right: 100px;vertical-align: top;">
		    <div id="main-right">

		    	<?php
		    		
		    		mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
					mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
					$rollno=$_SESSION['ROLLNO'];
					$query="SELECT workshop_enrolled.W_ID,W_NAME FROM workshop_enrolled INNER JOIN workshops ON 
						workshop_enrolled.W_ID=workshops.W_ID WHERE ROLLNO=$rollno";
					$result=mysql_query($query);
					if(!$result)
					{
						echo 'Unable to retrive results.Try again later';
						exit();
					}
					echo '<table border="1" cellspacing="0"><tr><th>Workshop ID</th><th>Workshop Name</th></tr>';
					while($row=mysql_fetch_assoc($result))
					{
						echo '<tr><td>'.$row['W_ID'].'</td><td>'.$row['W_NAME'].'</td></tr>';
					}
					echo '</table>';
					echo '<a href="workshop.php"><input type="submit" name="back" value="Back" class="freshbutton-blue "></a>';
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