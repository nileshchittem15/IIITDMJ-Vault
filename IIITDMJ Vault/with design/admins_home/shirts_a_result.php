<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title  >Shirts-IIITDMJ Vault</title>
	</head>
	<body>
		<div id="header">
			<div id="header1">
				<img id="logo" src="images/iiit.png">
				<h2 class="welcome">Welcome <span class="user"></span></h2>
			</div>
			<a href=# class="header-faq">FAQs</a>
			<a href="signout.php" class="header-signout">SignOut</a>
		</div>
		
		<table id="main" >
			<tr>
			<td style="vertical-align:top">
			
			</td>
			<td style="padding-right: 100px;height: 500px;">
		    <div id="main-right" style="padding-bottom: 0px;align-content: center;padding-right: 100px;padding-top: 10px;">
		    <center>
		<?php
			session_start();
			mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
			mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
			$wid=$_POST['shirts'];
			$query="SELECT * FROM shirts WHERE SHIRT_ID='$wid'";
			$result=mysql_query($query);
			$row=mysql_fetch_assoc($result);
			echo "<h2>Students who booked ".$row['SHIRT_ID']." shirt are</h2>";
			$query="SELECT students.ROLLNO,students.NAME FROM shirts_booked INNER JOIN students ON 
						shirts_booked.ROLLNO=students.ROLLNO WHERE SHIRT_ID='$wid'";
			$result=mysql_query($query);
			echo '<table border="1" cellspacing="0"><tr><th>ROLLNO</th><th>NAME</th></tr>';
			while($row=mysql_fetch_assoc($result))
			{
				echo '<tr><td>'.$row['ROLLNO'].'</td><td>'.$row['NAME'].'</td></tr>';
			}
			echo '</table>';

							echo '<a href="shirts_a.php"><input type="submit" name="back" value="Back" class="freshbutton-blue "></a>';
		?>
</div>
			</td>
			</tr>
		</table>
			
			</div>
			</td>
			</tr>
		</table>
		</center>
		<div id="footer">
			
		</div>
		<script src="script.js"></script>
	</body>
</html>
