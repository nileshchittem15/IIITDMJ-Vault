<?php
		include('up.php');
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

			$qry='SELECT * FROM app WHERE ROLLNO='.$_SESSION['ROLLNO'].' ORDER BY id DESC';
			$result=mysql_query($qry);

			echo '<table border="1">
				
			<th>rollno</th>
			<th>for</th>
			<th>reason</th>
			<th>date</th>';
			while ($row = mysql_fetch_assoc($result))
			{
					echo ' <tr> 
						
						<td>'.$row['rollno'].'</td>
						<td>'.$row['fora'].'</td>
						<td>'.$row['reason'].'</td>
						<td>'.$row['date'].'</td>
						<td><a name="$row[\'id\']" href="preapp2.php?id='.$row['id'].'">view</a></td>
						</tr>';
			}

			echo '</table>';
			include('down.php');
?>