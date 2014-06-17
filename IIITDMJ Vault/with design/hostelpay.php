<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title  >Pay Hostel-IIITDMJ Vault</title>
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
			<td style="padding-right: 100px;">
		    <div id="main-right" style="padding-bottom: 250px;padding-right: 10px;">

		    <?php
$rollno=$_SESSION['ROLLNO'];
if($_POST['submit']=='Pay Dues'){

	$_SESSION['hostel']=1;
}
if(isset($_POST['transpassword']))
	{
			if($_POST['transpassword']!=$_SESSION['TRANS_PASSWORD'])
			{
			$_SESSION['hostelconfirm']=1;
			$_SESSION['hostelpay']=0;
			echo "wrong transpassword";
			}
			else 
			{
			$_SESSION['passed']=1;
			$_SESSION['hostelpay']=1;
			}
	}
if($_POST['submit']=='confirm')
		{
			$_SESSION['hostelconfirm']=1;
		}
if($_POST['submit']=='cancel' || $_POST['submit']=='Go Back')
		{
			header('location:hostel.php');
		}
if($_SESSION['hostel']==1 && $_SESSION['hostelconfirm']==0)
{
echo '
<form action="hostelpay.php" method="post">
<table cellpadding = "10">
<tr><td>
<td><h3>Are You sure You want to Confirm to clear your Dues</h3></td>
</td></tr>
</table>
<table cellpadding = "20">
<tr>
<td style="padding-left: 250px;">
<input type="submit" class="freshbutton-blue" name="submit" value="confirm"></td>
<td><input type="submit" class="freshbutton-blue" name="submit" value="cancel"></td>
</tr>
</table>';
echo '</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
		</div>
		<script src="script.js"></script>
	</body>
</html>';
exit();
}

if($_SESSION['hostelconfirm']==1 && $_SESSION['hostelpay']==0 )
{
echo '
<form action="hostelpay.php" method="post">
<table cellpadding = "10">
<tr>
<td><h3>Enter Transaction Password</h3></td>
<td><input type="password" name="transpassword" ></td>
</tr>

<table cellpadding = "20" style="padding-left: 100px;">
<tr>
<td>
<input type="submit" class="freshbutton-blue" name="submit" value="pay"></td>
<td><input type="submit" class="freshbutton-blue" name="submit" value="cancel"></td>
</tr>
</table>';
echo '</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
		</div>
		<script src="script.js"></script>
	</body>
</html>';
exit();
}

if($_POST['submit']=='pay' && $_SESSION['passed']==1)
		{
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

				
				$qry1='SELECT BALANCE FROM students WHERE ROLLNO ='.$_SESSION['ROLLNO'].' ';
				$res1=mysql_query($qry1);
				if($res1 == FALSE)
					echo mysql_error() . '<br>';
				else
					echo ' ';
				if($res1){	
				while ($row = mysql_fetch_assoc($res1))
				{
					$bal=$row['BALANCE'];
				}
			}
				$yes="'YES'";
				$no="'NO'";
				if($bal>$_SESSION['H_DUE'])
				{

						mysql_query('BEGIN');
						$qry2='SELECT * FROM attendance WHERE  rollno='.$_SESSION['ROLLNO'].' AND PAID='.$no.' ';
						$res2=mysql_query($qry2) or die(mysql_error());

					while ($row = mysql_fetch_assoc($res2))
				{
					echo "123";
					$roll=$row['ROLLNO'];
					$bid1=$row['MONTH'];
					$due1=$row['DUE'];
					$qry3="INSERT INTO hostel (rollno,month,amount,date) VALUES ($roll,$bid1,$due1,DATE(NOW()))";
					$res3=mysql_query($qry3) or die(mysql_error());

				}
				$qry4 = 'UPDATE ATTENDANCE SET DUE=0,PAID='.$yes.' WHERE ROLLNO='.$_SESSION['ROLLNO'].' ' ;
				//Execute query
				$res4 = mysql_query($qry4);
				if($result)
				{
				echo "Succesfully Cleared Your Dues";
				}
				echo "<br>";
			
				$upbal=$bal-$_SESSION['H_DUE'];
				$update1 = 'UPDATE students SET BALANCE = '.$upbal.' WHERE ROLLNO ='.$_SESSION['ROLLNO'].' ';
				$res5 = mysql_query($update1); 
				if($res5 == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo '<br>';

				$hdue=$_SESSION['H_DUE'];
				
				$qry6 = "INSERT INTO trans (rollno,name,toa,date,amount) VALUES ($rollno,'Hostel_dues','HOSTEL',DATE(NOW()),$hdue)";
				$res6=mysql_query($qry6);
				if($res6 == FALSE)
					echo mysql_error() . '<br>';
				else
					echo 'Transaction Complete ';

				if($res4 && $res2  && $res5 && $res6)
				{

					mysql_query("COMMIT");
				
				$_SESSION['hostelconfirm']=NULL;
				$_SESSION['passed']=NULL;
				$_SESSION['hostelpay']=NULL;
				$_SESSION['hostel']=NULL;

				echo '<br><br><center><a href="hostel.php" style="color: red;">click here to go back</a></center>';

				}
				


				}

				else {
					echo "Insufficient Balance";
				}
	
				echo '</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
		</div>
		<script src="script.js"></script>
	</body>
</html>';
	exit();
	}



?>

		</div>
			</td>
			</tr>
		</table>
		
		<div id="footer">
		</div>
		<script src="script.js"></script>
	</body>
</html>