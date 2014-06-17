
		<?php
			include('up.php');
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			$id=$_GET['id'];
			$query="SELECT * FROM SHIRTS WHERE SHIRT_ID='$id'";
			$result=mysql_query($query);
			if(!$result)
			{
				echo 'Unable to retrive results.Try again later';
				exit();
			}
			$row=mysql_fetch_assoc($result);
			$imglink=$row['IMG_ID'];
			echo '<h1>'.$row['SHIRT_ID'].'</h1>';
			echo '<img src="images/'.$imglink.'" width="400" height="400" /><br />';
			echo '<form action="transaction_shirts.php" method="post">
					<input type="Submit" name="Pay" class="freshbutton-blue" value="Pay" /></form>
					<a href="shirts.php"><input type="Submit" name="Back" class="freshbutton-blue" value="Back" /></a>';
			$_SESSION['amount']=$row['AMOUNT'];
			$_SESSION['id']=$row['SHIRT_ID'];
			include('down.php');
		?>