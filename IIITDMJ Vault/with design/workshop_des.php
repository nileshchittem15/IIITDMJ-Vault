
		<?php
			include('up.php');
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			$query='SELECT * FROM WORKSHOPS WHERE W_ID='.$_GET['id'];
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
					<input type="Submit" name="Pay" class="freshbutton-blue" value="Pay" />';
			$_SESSION['amount']=$row['AMOUNT'];
			$_SESSION['name']=$row['W_NAME'];
			$_SESSION['W_ID']=$_GET['id'];
			$_SESSION['wrong']=0;
			include('down.php');
		?>
