
		<?php
			include('up.php');
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			echo '<a href="workshop_view.php" style="color: red;float: right;">View Your Enrolled Details</a></br></br></br>';
			$query='SELECT * FROM WORKSHOPS';
			$result=mysql_query($query);
			if(!$result)
			{
				echo 'Unable to retrive results.Try again later';
				exit();
			}
			
			echo '<table border="1">
					<th>Workshop ID</th>
					<th>Workshop Name</th>
					<th>BeginDate</th>
					<th>LastDate</th>
					<th>Amount</th>';

			while ($row = mysql_fetch_assoc($result))
			{
				if($row['LAST_DATE']>=date('Y-m-d'))
				{
				$_SESSION['count']=1;
				echo '<tr>
						<td>'.$row['W_ID'].'</a></td>
						<td><a name="$row[\'W_ID\']" href="workshop_des.php?id='.$row['W_ID'].'">'.$row['W_NAME'].'</a></td>
						<td>'.$row['BEGIN_DATE'].'</td>
						<td>'.$row['LAST_DATE'].'</td>
						<td>'.$row['AMOUNT'].'</td>
					</tr>';
				$_SESSION['count']++;
				}
			}
			echo '</table>';
			include('down.php');
		?>
