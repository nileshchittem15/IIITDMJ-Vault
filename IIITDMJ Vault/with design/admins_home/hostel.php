<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title  >Admin-IIITDMJ Vault</title>
	</head>
	<body>
		<div id="header">
			<div id="header1">
				<img id="logo" src="images/iiit.png">
				<h2 class="welcome">Welcome <span class="user">Admin</span></h2>
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
		    <center style="
    padding-bottom: 260px;
"><a href="admin.php"><input type="submit" name="back" value="Click Here To Go Back" class="freshbutton-blue "></a>
<?php
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


			if(isset($_POST['paid']) && $_POST['paid']=='paid')
			{
					$qry="UPDATE account set bal=0 WHERE name='hostel'";
					$result=mysql_query($qry);
			}
			
			


			$qry="SELECT * FROM trans where toa='hostel' ORDER BY id DESC";
			$result=mysql_query($qry);

			echo '<table border="1">
			<th>rollno</th>
			<th>name</th>
			<th>toa</th>
			<th>date</th>
			<th>amount</th>';
			while ($row = mysql_fetch_assoc($result))
			{
					echo '<tr>
						<td>'.$row['rollno'].'</td>
						<td>'.$row['name'].'</td>
						<td>'.$row['toa'].'</td>
						<td>'.$row['date'].'</td>
						<td>'.$row['amount'].'</td>
						</tr>';
			}

			echo '</table>';

			$bal=0;
			$qry="SELECT bal FROM account where name='hostel' ";
			$result=mysql_query($qry);
			while ($row = mysql_fetch_assoc($result))
			{
				$bal=$row['bal'];
			}

			echo 'Balance : '.$bal;
			
?>
<form action="hostel.php" method="post">
	<input type="submit" name="paid" value="paid" class="freshbutton-blue ">
</form>

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