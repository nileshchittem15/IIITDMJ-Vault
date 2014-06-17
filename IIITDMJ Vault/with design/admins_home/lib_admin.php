<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title  >Library-IIITDMJ Vault</title>
	</head>
	<body>
		<div id="header">
			<div id="header1">
				<img id="logo" src="images/iiit.png">
				<h2 class="welcome">Welcome <span class="user">Librarian</span></h2>
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
			if(isset($_POST['back']))
				header("location:lib_admin.php");
			if(isset($_POST['submit']))
			{
						
						$rollser=$_POST['rollser'];
						
	
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


						$qry='SELECT * FROM book where rollno="' .$rollser. '" ORDER BY id DESC';
						$result=mysql_query($qry);

						if($result)
						{
							$count = mysql_num_rows($result); 
						}

						if($count==0)
						{
							echo 'no result found';
						}
						else
						{
							echo '<table border="1">
							<th>rollno</th>
							<th>bid</th>
							<th>amount</th>
							<th>date</th>';
			
							while ($row = mysql_fetch_assoc($result))
							{
								echo '<tr>
								<td>'.$row['rollno'].'</td>
								<td>'.$row['bid'].'</td>
								<td>'.$row['amount'].'</td>
								<td>'.$row['date'].'</td>
								</tr>';
							}

							echo '</table>';
						}
					
							echo '<form action="lib_admin.php" method="post">';
							echo '<input type="submit" name="back" value="Back" class="freshbutton-blue "></form>';
			}
			else{

				?>
				<form action="lib_admin.php" method="post">
<span style="font-weight: bolder;padding-right: 35px;">rollno</span>
<input type="text" name="rollser" maxlength="7">
<!--<input type="date" name="date" maxlength="7">-->


<input type="submit" name="submit" value="submit" class="freshbutton-blue "><br><br><br><br>
</form>


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








			$qry='SELECT * FROM book where date=DATE(NOW())ORDER BY id DESC';
			$result=mysql_query($qry);
			echo '<h3>Book Dues For Today-</h3>';
			echo '<table border="1">
			<th>rollno</th>
			<th>bid</th>
			<th>amount</th>
			<th>date</th>';
			while ($row = mysql_fetch_assoc($result))
			{
					echo '<tr>
						<td>'.$row['rollno'].'</td>
						<td>'.$row['bid'].'</td>
						<td>'.$row['amount'].'</td>
						<td>'.$row['date'].'</td>
						</tr>';
			}

			echo '</table>';

		
?>



<?php } ?>