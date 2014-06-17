
		<?php
			include('up.php');
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			
			$query='SELECT ROLLNO,BALANCE,TRANS_PASSWORD FROM students WHERE ROLLNO='.$_SESSION['username'].';';
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			if($row['TRANS_PASSWORD']==$_POST['transpass'])
			{
			//echo $row['BALANCE'].'<br />'.$_SESSION['amount'].'<br />';
			if($row['BALANCE']>=$_SESSION['amount'])
			{
				$username=$_SESSION['username'];
				$name=$_SESSION['name'];
				$amount=$_SESSION['amount'];
				$wid=$_SESSION['W_ID'];
				mysql_query('BEGIN');
				$query="INSERT INTO trans (rollno,name,toa,date,amount) VALUES('$username','$name','workshop',DATE(NOW()),$amount);";
				//$query='INSERT INTO trans(rollno,name,toa,date) VALUES('.$_SESSION['username'].','.$_SESSION['id'].',workshop,DATE(NOW())';
				$result1=mysql_query($query);
				
				$query="UPDATE students SET BALANCE=BALANCE-'$amount' WHERE ROLLNO='$username'";
				$result2=mysql_query($query);		
					
					
				$query="INSERT INTO workshop_enrolled VALUES ($wid,$username,DATE(NOW()))";
				$result4=mysql_query($query);

				
					
				if($result1 && $result2 && $result4)
				{
					mysql_query("COMMIT");
					$query="SELECT ROLLNO,BALANCE FROM STUDENTS WHERE ROLLNO=$username";
					$result6=mysql_query($query);
					$row=mysql_fetch_assoc($result6);
					echo "YOu Have Succesfully Enrolled For $name<br>";
					echo 'Available Balance:  Rs.'.$row['BALANCE'].'<br>';
					echo '<br /><a href="home.php">Go Back to Home</a>';
				}
				else
				{
					mysql_query("ROLLBACK");
					if(!$result4)
					{
						echo 'Oops!!! It seems you have already registered for this workshop<br />';
					}
					echo 'Transaction Failed<br />';
					$query="SELECT ROLLNO,BALANCE FROM STUDENTS WHERE ROLLNO=$username";
					$result5=mysql_query($query);
					$row=mysql_fetch_assoc($result5);
					echo 'Available Balance:Rs. '.$row['BALANCE'];
					echo '<br /><a href="home.php">Go Back to Home</a>';
				}
					//to be added:Transfer to the workshop account.
					//$query="INSERT INTO workshop_enrolled (id,ROLLNO,W_ID) VALUES('$username','$toa','ACAD',DATE(NOW()));";

				
				
				
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
				header('location:transaction.php');
			}