
		<?php
			include('up.php');
			$_SESSION['username']=$_SESSION['ROLLNO'];
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			echo '<a href="shirts_view.php" style="color: red;float: right;">View Your Previous Booking Details</a></br></br></br>';
			$query='SELECT * FROM SHIRTS';
			$result=mysql_query($query);
			if(!$result)
			{
				echo 'Unable to retrive results.Try again later';
				exit();
			}
			
			echo '<table border="1">
					<th>ShirtID</th>
					<th>LastDate</th>
					<th>Amount</th>';

			while ($row = mysql_fetch_assoc($result))
			{
				if($row['LAST_DATE']>=date('Y-m-d'))
				{
				$_SESSION['count']=1;
				echo '<tr>
						<td><a name="$row[\'SHIRT_ID\']" href="shirts_des.php?id='.$row['SHIRT_ID'].'">'.$row['SHIRT_ID'].'</a></td>
						<td>'.$row['LAST_DATE'].'</td>
						<td>'.$row['AMOUNT'].'</td>
					</tr>';
				$_SESSION['count']++;
				}
			}
			echo '</table>';

			include('down.php');
		?>