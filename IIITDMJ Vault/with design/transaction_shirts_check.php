
		<?php
			include('up.php');
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			
			$query='SELECT ROLLNO,BALANCE,TRANS_PASSWORD FROM students WHERE ROLLNO='.$_SESSION['username'].';';
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			if($row['TRANS_PASSWORD']==$_POST['transpass'])
			{
			
							if($row['BALANCE']>=$_SESSION['amount'])
							{
							$username=$_SESSION['username'];
							$name="'".$_SESSION['id']."'";
							$amount=$_SESSION['amount'];
							$sid="$name";
							mysql_query("BEGIN");

							$query1="INSERT INTO trans (rollno,name,toa,date,amount) VALUES('$username',$name,'shirts',DATE(NOW()),$amount);";
							$result1=mysql_query($query1);
							
						
							$query2="UPDATE students SET BALANCE=BALANCE-'$amount' WHERE ROLLNO='$username'";
							$result2=mysql_query($query2);
							
								
							
							$query4="INSERT INTO shirts_booked VALUES ($name,$username,DATE(NOW()))";
							$result4=mysql_query($query4);
							
							
							
							if($result1 && $result2 && $result4)
							{
								mysql_query("COMMIT");
								echo 'Transaction Successful<br />';
								$query3="SELECT ROLLNO,BALANCE FROM STUDENTS WHERE ROLLNO=$username";
								$result3=mysql_query($query3);
								$row=mysql_fetch_assoc($result3);
								echo 'Available Balance:'.$row['BALANCE'].'<br />';
								echo '<a href="home.php">Go Back to Home</a>';
							}
							else
							{
								mysql_error();
								mysql_query("ROLLBACK");
								echo 'Transaction Failed<br />';
								if(!$result4)
								{
									echo 'Oops!!!It looks that you have already bought this shirt<br />';
								}
								$query3="SELECT ROLLNO,BALANCE FROM STUDENTS WHERE ROLLNO=$username";
								$result3=mysql_query($query3);
								$row=mysql_fetch_assoc($result3);
								echo 'Available Balance:'.$row['BALANCE'].'<br />';
								echo '<a href="home.php">Go Back to Home</a>';

								
							}
				
							include('down.php');
			}

			else
			{
				echo 'Not enough balance.Please refill your account before trying to make a transaction';
				include('down.php');
				exit();
			}



			}
			else
			{
				$_SESSION['wrong']=1;
				header('location:transaction_shirts.php');
			}

			?>