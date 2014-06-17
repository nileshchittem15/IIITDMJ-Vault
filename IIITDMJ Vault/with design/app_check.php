
				
<?php
if(!isset($c))
		$c=0;
	if($c==0)
		include("up.php");
	
	if($_POST['submit'] == 'pay')
	{	
		if($_POST['tpass']=='')
		{	
			$_POST['submit']='Confirm submit';
			$msg='enter transaction Password';$c=1;
			include("app_check.php");
			exit();
		}
		else
		{	
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
			
			$qry='SELECT * FROM students WHERE ROLLNO ='. $_SESSION['$rollno'].' AND TRANS_PASSWORD ='. $_POST['tpass'];
			$result=mysql_query($qry);
			if($result)
			{
				$count = mysql_num_rows($result); 
			}
			if($count == 0)
			{ 
				$_POST['submit']='Confirm submit';
				$msg='incorrect transaction Password';$c=1;
				include("app_check.php");
				exit();
				 
			}
			
			if($count == 1)
			{ 	
				$fora="'".$_SESSION['appfor']."'";
				$reason="'".$_SESSION['reason']."'";
				$rollno=$_SESSION['$rollno'];
				$category="'".$_SESSION['category']."'";
				$phone_no=$_SESSION['phone_no'];
				$room_no="'".$_SESSION['room_no']."'";
				$Hall="'".$_SESSION['Hall']."'";


				//select student


			
				
				
				$qry='SELECT BALANCE FROM students WHERE ROLLNO ="' .$rollno. '" ';
				$res=mysql_query($qry);
				if($res == FALSE)
					echo mysql_error() . '<br>';
				else
					echo ' ';

				//select and check balance

				while ($row = mysql_fetch_assoc($res))
				{
					$bal=$row['BALANCE'];
				}
				$upbal=$bal-50;

				//update balance
				if($upbal>0)
				{
						mysql_query('BEGIN');

						//q1
				$update1 = "UPDATE students SET BALANCE = $upbal WHERE ROLLNO =$rollno";
				
				$results1 = mysql_query($update1); 
				
				if($results1 == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo "Money Transfered <br> ";

				//insert in app

						//q2
				$qry2 = "INSERT INTO app (rollno,fora,reason,date,category,phone_no,room_no,Hall) VALUES ($rollno,$fora,$reason,DATE(NOW()),$category,$phone_no,$room_no,$Hall)";
				$res2=mysql_query($qry2);
				if($res2 == FALSE)
					echo mysql_error() . '<br>';
				else
					echo 'You Have Succesfully Applied <br> ';

						//q3
				$qry3='SELECT * FROM app WHERE rollno ="' .$rollno. '" ';
				$res3=mysql_query($qry3);
				if($res3 == FALSE)
					echo mysql_error() . '<br>';
				else
					echo ' ';
				
				while ($row = mysql_fetch_assoc($res3))
				{
						$c=$row['id'];
				}
				$d='App ID No'.$c.'<br> ';
				echo $d;
				$e="'".$d."'";
					
					//q4
				$qry4 = "INSERT INTO trans (rollno,name,toa,date,amount) VALUES ($rollno,$e,'ACAD',DATE(NOW()),50)";
				$res4=mysql_query($qry4);
				if($res4 == FALSE)
					echo mysql_error() . '<br>';
				else
					echo 'Transaction Succesfull<br>';
				
				if($res4 && $res3 && $res2 && $results1){

					mysql_query("COMMIT");
				$_SESSION['name']=null;
				$_SESSION['f_name']=null;
				$_SESSION['year']=null;
				$_SESSION['branch']=null;
				$_SESSION['programme']=null;
				$_SESSION['appfor']=null;
				$_SESSION['reason']=null;
				$_SESSION['category']=null;
				$_SESSION['phone_no']=null;
				$_SESSION['room_no']=null;
				$_SESSION['Hall']=null;
				$_SESSION['page']=null;
				$_SESSION['start']=null;

				echo '<a href="home.php">click here to go back</a>';

				}
				else{
					mysql_query("ROLLBACK");
					echo 'trans failed';
					echo '<a href="home.php">click here to go back</a>';
				}

					
				}
				else{
					echo 'insuficient balance or no due';
					echo '<a href="home.php">click here to go back</a>';
				}
			}				

			else
			{ 
				$_POST['submit']='Confirm submit';
				$msg='incorrect transaction Password';
				include("app_check.php");$c=1;
				exit(); 
			}
		}
		
	}
	else if($_POST['submit'] == 'back')
	{
		
		header('location:app.php');
		exit();
	}
?>

<?php
	if($_POST['submit'] == 'Confirm submit')
	{
		
?>
		<form action="app_check.php" method="post">
			<table cellpadding = "10" >
				<tr>
					<td>Roll No</td>
					<td><?php echo $_SESSION['$rollno'] ;?></td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><?php echo "Rs.50" ;?></td>
				</tr>
				<tr>
					<td>Trans Password</td>
					<td><input type="password" name="tpass" maxlength="15"></td>
				</tr>
				<?php
				if(isset($msg))
				{
					echo'<tr ><td colspan="2" align="center">' .$msg.'</td></tr>';}
			?>
				<tr>
					<td><input type="submit" name="submit" class="freshbutton-blue" value="pay"></td>
					<td><input type="submit" name="submit" class="freshbutton-blue" value="back"></td>
				</tr>
				
				</table>
		</form>
		
<?php	}
	if($_POST['submit'] == 'back')
	{
		header('location:app.php');
		exit();
	}
	if($_POST['submit'] == 'submit')
	{
		
				$_SESSION['appfor']=$_POST['appfor'];
				$_SESSION['reason']=$_POST['reason'];
				$_SESSION['category']=$_POST['category'];
				$_SESSION['phone_no']=$_POST['phone_no'];
				$_SESSION['room_no']=$_POST['room_no'];
				$_SESSION['Hall']=$_POST['Hall'];
		if(!$_POST['appfor'] || !$_POST['reason'] || !$_POST['category'] || !$_POST['phone_no'] || !$_POST['room_no'] || !$_POST['Hall'])
		{
			
			header('location:app_error.php');
		}
		else
		{
			
?>
<html>
	<body>
		<center>
			<h1>Application Form</h1>
			<form action="app_check.php" method="post">
			
			<table cellpadding = "10">
				<tr>
					<td>Application For*</td>
					<td><?php echo $_SESSION['appfor'] ;?></td>
				</tr>

				<tr>
					<td>Reason*</td>
					<td><?php echo $_SESSION['reason'] ;?></td>
				</tr>
				
				<tr>
					<td>Roll No</td>
					<td><?php echo $_SESSION['$rollno'] ;?></td>
				</tr>
				
				<tr>
					<td>Name</td>
					<td><?php echo $_SESSION['name'] ;?></td>
				</tr>
				
				<tr>
					<td>Fathers Name</td>
					<td><?php echo $_SESSION['f_name'] ;?></td>
				</tr>
				
				<tr>
					<td>Year</td>
					<td><?php echo $_SESSION['year'] ;?></td>
				</tr>
				
				<tr>
					<td>Branch</td>
					<td><?php echo $_SESSION['branch'] ;?></td>
				</tr>
				
				<tr>
					<td>Programme</td>
					<td><?php echo $_SESSION['programme'] ;?></td>
				</tr>
				
				<tr>
					<td>Category*</td>
					<td><?php echo $_SESSION['category'] ;?></td>
				</tr>
				
				<tr>
					<td>Phone No*</td>
					<td><?php echo $_SESSION['phone_no'] ;?></td>
				</tr>
				
				<tr>
					<td>Room NO*</td>
					<td><?php echo $_SESSION['room_no'];?></td>
				</tr>
				
				<tr>
					<td>Hall*</td>
					<td><?php echo $_SESSION['Hall'] ;?></td>
				</tr>
				
				<tr>
					<td>Date</td>
					<td><?php echo date('d').'/'.date('M').'/'.date('Y');?></td>
				</tr>
				
				
			</table>

			<table cellpadding = "20">
				<tr>
					<td><input type="submit" name="submit" class="freshbutton-blue" value="Confirm submit"></td>
					<td><input type="submit" name="submit" class="freshbutton-blue" value="back"></td>
				</tr>
			</table>
			</form>
			
		</center>
	</body>
</html>
<?php

		}
		
	}
		if($c==0)
	include("down.php");
	
	
?>
