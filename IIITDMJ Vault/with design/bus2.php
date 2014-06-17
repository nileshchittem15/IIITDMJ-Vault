<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title >Bus-IIITDMJ Vault</title>
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
$_SESSION['busbook']=0;
$_SESSION['busconfirm']=0;
$_SESSION['buspay']=0;
$_SESSION['passed']=0;
$rollno="'".$_SESSION['ROLLNO']."'";

	echo '<a href="view_bus.php" style="color: red;float: right;">View Previous Booking Details</a></br></br></br>';


	if(isset($_POST['transpassword']))
	{
			if($_POST['transpassword']!=$_SESSION['TRANS_PASSWORD'])
			{
			$_SESSION['busconfirm']=1;
			$_SESSION['buspay']=0;
			echo "<h3 align=center>wrong transpassword</h3>";
			}
			else {
			$_SESSION['passed']=1;
			}
	}
if(isset($_POST['submit']))
	{
		if($_POST['submit']=='cancel' || $_POST['submit']=='Go Back')
		{
			header('location:bus2.php');
		}
	if($_POST['submit']=='Book')
	{
		if($_POST['time'])
				{
					$_SESSION['busbook']=1;
					if($_POST['time']=="time1")
						{
						$instime="2:30";
						
						}
					else if($_POST['time']=="time2")
						{
						$instime="3:40";
						}
					else if($_POST['time']=="time3")
						{
						$instime="5:15";
						}
					else if($_POST['time']=="time4")
						{
						$instime="6:30";
						
						}
						
				}
		else 
			{
			header('location:bus2.php');
			}
		}

	if($_POST['submit']=='busconfirm')
		{
			$_SESSION['busconfirm']=1;
		}
	if($_POST['submit']=='buspay' && $_SESSION['passed']==1)
		{
		if($_SESSION['TIME']=='2:30')
		{
		$instime="'2:30'";
		echo "2:30";
		}
		else if($_SESSION['TIME']=='3:40')
		{
		$instime="'3:40'";
		}
		else if($_SESSION['TIME']=='5:15')
		{
		$instime="'5:15'";
		}
		else if($_SESSION['TIME']=='6:30')
		{
		$instime="'6:30'";
		echo "6:30";
		}
		$link = mysql_connect('localhost','root','');
	//Check link to the mysql server
		if(!$link){
		die('Failed to connect to server: ' . mysql_error());
		}
	//Select database
		$db = mysql_select_db('iiitdmjv');
		if(!$db){
		die("Unable to select database");
		}
	//Create query
	
				$qry='SELECT BALANCE FROM students WHERE ROLLNO ='.$rollno.' ';
				$res=mysql_query($qry);
				if($res == FALSE)
					echo mysql_error() . '<br>';
				else
					echo '<br>';
					
				while ($row = mysql_fetch_assoc($res))
				{
					$bal=$row['BALANCE'];
				}
				if($bal>10){

						mysql_query('BEGIN');
							//q1
				$qry1 = "INSERT INTO BUS(ROLLNO,DATE,TIME) VALUES($rollno,DATE(NOW()),$instime);";
				//Execute query
				$res1 = mysql_query($qry1);
				if($res1)
				{
				echo "Succesfully booked<br>";
				}
				$upbal=$bal-10;
				$update2 = "UPDATE students SET BALANCE = $upbal WHERE ROLLNO =$rollno";
				$res2 = mysql_query($update2); 
				if($res2 == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo "Succesfully Deducted From Account Balance<br>";
			
				$bus21="'Bus Ticket'";
				$qry3 = "INSERT INTO trans (rollno,name,toa,date) VALUES ($rollno,$bus21,'BUS',DATE(NOW()))";
				$res3=mysql_query($qry);
				if($res3 == FALSE)
					echo mysql_error() . '<br>';
				else
					echo 'Transaction Completed <br>';
			
				if($res3 && $res2 && $res1)
					{
						mysql_query("COMMIT");
					}

				echo '<form action="bus2.php" method="post">			
						<input type="submit" name="submit" value="Go Back" class="freshbutton-blue">';
				}
				else {
				echo "Insufficient Balance";
				}
	
	exit();
	}
}
	if($_SESSION['busbook']==1)
	{
	echo '<form action="bus2.php" method="post">
	<table cellpadding = "10">
	<tr><td>
	<td><h1>Are You sure You want to Confirm Your Selection To Book a seat</h1></td>
	</td></tr>
	</table>
	<table cellpadding = "20">
	<tr>
	<td>
	<input type="submit" name="submit" value="busconfirm" class="freshbutton-blue"></td>
	<td><input type="submit" name="submit" value="cancel" class="freshbutton-blue"></td>
	</tr>
	</table>';
	$_SESSION['TIME']=$instime;
	exit();
	}
	

	if($_SESSION['busconfirm']==1 && $_SESSION['buspay']==0 )
	{
	echo '<form action="bus2.php" method="post">
	<table cellpadding = "10">
	<tr>
	<td><h1>Enter Transaction Password</h1></td>
	<td><input type="password" name="transpassword" ></td>
	</tr>
	<table cellpadding = "20" align="center">
	<tr>
	<td>
	<input type="submit" name="submit" value="buspay" class="freshbutton-blue"></td>
	<td><input type="submit" name="submit" value="cancel" class="freshbutton-blue"></td>
	</tr>
	</table>';
	exit();
	}

	$link = mysql_connect('localhost','root','');
	//Check link to the mysql server
	if(!$link)
		{
		die('Failed to connect to server: ' . mysql_error());
		}
	//Select database
	$db = mysql_select_db('iiitdmjv');
	if(!$db){
	die("Unable to select database");
	}
	//Create query
	$qry = "SELECT * FROM BUS WHERE ROLLNO =$rollno AND DATE=DATE(NOW())";
	//Execute query
	$check = mysql_query($qry);
	$check1=0;
	while(mysql_fetch_assoc($check))
	{
	$check1=1;
	}
	if($check1==0 && $check1!=1){
	echo '<h1>Bus Booking </h1>
	<form action="bus2.php" method="post">
	<table cellpadding = "10">
	<td>Time
	<select name = "time">
	<option></option>
	<option value="time1">2:30 pm</option>;
	<option value="time2">3:40 pm</option>;
	<option value="time3">5:15 pm</option>;
	<option value="time4">6:30 pm</option>;
	</select>

	<table cellpadding = "20">
	<tr>
	<td><input type="submit" class="freshbutton-blue" name="submit" value="Book" ></td>
	</tr>
	</table>
	</form>';
}
if($check1!=0 && $check1==1)
{
	echo "You have Already Booked Your Ticket For Today. <br>   Sorry For the Inconvinience.";
	echo "<br>Booking Details .";
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
			$qry="SELECT * FROM BUS WHERE ROLLNO =$rollno AND DATE=DATE(NOW())";
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
}

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