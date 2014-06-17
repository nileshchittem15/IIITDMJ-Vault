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
			<td style="padding-right: 100px">
		    <div id="main-right">
<?php
	
		if($_POST['cpass'] && $_POST['npass'] && $_POST['rnpass'])
		{
		  	if($_POST['npass']!=$_POST['rnpass'])
			{
				include("changepass.php");
				echo '<p align="center">New Passwords didn\'t match.</p>';

				include("down.php");
				exit();
			}
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			$cpass=$_POST['cpass'];
			$npass=$_POST['npass'];
			$rnpass=$_POST['rnpass'];
			$rollno=$_SESSION['ROLLNO'];
			$query="SELECT PASSWORD FROM students WHERE ROLLNO=$rollno";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			if($row['PASSWORD']==$cpass)
			{
				$query1="UPDATE students SET PASSWORD=$npass WHERE ROLLNO=$rollno";
				$result1=mysql_query($query1);
				if(!$result1)
				{
					include("changepass.php");
					echo '<p align="center">Password Updation Failed</p>';
					include("down.php");
					exit();
				}
				else
				{
					include("changepass.php");
					echo '<p align="center">Password Updated Successfully</p>';
					include("down.php");
					exit();
				}
			}
			else
			{
				include("changepass.php");
				echo '<p align="center">Enter Correct Password</p>';
				include("down.php");
				exit();
			}
		}
		else if(!$_POST['cpass'] || !$_POST['npass'] || !$_POST['rnpass'])
		{
			include("changepass.php");
		  	echo '<p align="center">All * fields are mandatory.</p>';
		  	include('down.php');
		  	exit();
			
		}
		


			
?>

</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
		</div>
		<script src="script_s.js"></script>
	</body>
</html>