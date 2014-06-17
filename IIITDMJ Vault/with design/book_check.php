<?php
	if(!isset($c))
		$c=0;
	if($c==0)
		include("up.php");
	
	$_SESSION['start']=1;

	if($_POST['submit'] == 'pay')
	{	
		if($_POST['tpass']=='')
		{	
			$_POST['submit']='paydue';
			$msg='enter transaction Password';$c=1;
			include("book_check.php");
			
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
				$_POST['submit']='paydue';
				$msg='incorrect transaction Password';$c=1;
				include("book_check.php");
				
	
				exit();
				 
			}
			
			if($count == 1)
			{ 	
				//$fora="'".$_SESSION['appfor']."'";
				//$reason="'".$_SESSION['reason']."'";
				$rollno=$_SESSION['ROLLNO'];

				$qry='SELECT BALANCE FROM students WHERE ROLLNO ="' .$rollno. '" ';
				$res=mysql_query($qry);
				if($res == FALSE)
					echo mysql_error() . '<br>';
				else
					echo ' ';

				while ($row = mysql_fetch_assoc($res))
				{
					$bal=$row['BALANCE'];
				}
				$upbal=$bal-$_SESSION['pdue'];
				if($upbal>0 && $_SESSION['pdue']>0)
				{
					mysql_query('BEGIN');
				$update = "UPDATE students SET BALANCE = $upbal WHERE ROLLNO =$rollno";
				
				$results1 = mysql_query($update); 
				
				if($results1 == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo ' ';


				$qry="SELECT * FROM book_info WHERE  rollno='$rollno' AND returndate is NOT NULL";
				$result2=mysql_query($qry) or die(mysql_error());

				while ($row = mysql_fetch_assoc($result2))
				{
					$roll=$row['rollno'];
					$bid1=$row['bid'];
					$due1=$row['due'];
					$qry7="INSERT INTO book (rollno,bid,amount,date) VALUES ($roll,$bid1,$due1,DATE(NOW()))";
					$result7=mysql_query($qry7) or die(mysql_error());

				}


				
					
				$update = "UPDATE book_info SET due = 0 WHERE rollno ='$rollno' AND returndate is NOT NULL";
				
				$results3 = mysql_query($update);

				if($results3 == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo ' ';

            /*    $ndue=$_SESSION['due']-$_SESSION['pdue'];
				$update = "UPDATE book_due SET due = '$ndue' WHERE rollno =$rollno";
				
				$results = mysql_query($update);

				if($results == FALSE) 
					echo mysql_error() . '<br>'; 
				else 
					echo mysql_info();*/

					$pdue=$_SESSION['pdue'];
				$qry = "INSERT INTO trans (rollno,name,toa,date,amount) VALUES ($rollno,'lib_due','lib',DATE(NOW()),$pdue)";
				$res4=mysql_query($qry);
				if($res4 == FALSE)
					echo mysql_error() . '<br>';
				else
					echo ' ';
				
				
				

				$qry="DELETE from book_info WHERE due=0 AND returndate IS NOT NULL";
				$result5=mysql_query($qry) or die(mysql_error());
				
				if($res4 && $results3 && $result2 && $results1 && $result7){

					mysql_query("COMMIT");
					echo " Transaction Completed Succesfully.<br>You Have Cleared Your Library Dues.";
				$_SESSION['start']=null;
				$_SESSION['due']=null;
				$_SESSION['pdue']=null;

				echo '<a href="home.php">click here to go back</a>';

				}
				else
				{
					mysql_query("ROLLBACK");
					echo 'Transaction Failed<br>';
					echo '<a href="home.php">click here to go back</a>';
				}

					
				}
				else{
					echo 'Insuffient Balance Or No Due<br>';
					echo '<a href="home.php">click here to go back</a>';
				}
			}				

			else
			{ 
				$_POST['submit']='paydue';
				$msg='incorrect transaction Password';
				include("book_check.php");$c=1;
				
				exit(); 
			}
		}
		
	}
	else if($_POST['submit'] == 'back')
	{
		
		header('location:book.php');
		exit();
	}


	if($_POST['submit'] == 'paydue')
	{
		$Amount=$_SESSION['pdue'];
?>
		<form action="book_check.php" method="post">
			<table cellpadding = "10" >
				<tr>
					<td>Roll No</td>
					<td><?php echo $_SESSION['$rollno'] ;?></td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><?php echo "Rs.".$Amount ;?></td>
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
					<td><input type="submit" class="freshbutton-blue" name="submit" value="pay"></td>
					<td><input type="submit" class="freshbutton-blue" name="submit" value="back"></td>
				</tr>
				
				</table>
		</form>
<?php	} 
if($c==0)
	include("down.php");
?>