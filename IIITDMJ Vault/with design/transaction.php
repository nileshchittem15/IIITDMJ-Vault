
		<?php
			include('up.php');
			$_SESSION['username']=$_SESSION['ROLLNO'];
			
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			
			echo '<br /><br />';
				if(isset($_SESSION['wrong']))
			{
					if($_SESSION['wrong']==1)
					{
						echo "Wrong Transaction Password Entered<br><br>";
					}
			}
			echo 'Username : '.$_SESSION['username'].'<br />
					Amount :'.$_SESSION['amount'].'<br />';
			echo '<form action="transaction_check.php" method="post">
					Transaction Password: <input name="transpass" type="password" /><br />
					<input type="submit" class="freshbutton-blue" value="Confirm Payment" />
				  </form>';
			/*$query='SELECT * FROM WORKSHOPS WHERE W_ID='.$_GET['id'];
			$result=mysql_query($query);
			if(!$result)
			{
				echo 'Unable to retrive results.Try again later';
				exit();
			}
			$row=mysql_fetch_assoc($result);
			echo '<h1>'.$row['W_NAME'].'</h1>';
			echo '<p padding="20px">'.$row['DESCRIPTION'].'</p>';
			echo '<form action="transaction.php" method="post">
					<input type="Submit" name="Pay" value="Pay" />';*/

			include('down.php');		
		?>
	