<html>
	<head>
		<link href="css.css" rel="stylesheet" type="text/css">
		<title  >Acad-IIITDMJ Vault</title>
	</head>
	<body>
		<div id="header">
			<div id="header1">
				<img id="logo" src="images/iiit.png">
				<h2 class="welcome">Welcome <span class="user">Acad</span></h2>
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
				header("location:app_admin.php");
			if(isset($_POST['submit']))
			{
						
						$rollser=$_POST['rollser'];
						$date = $_POST['year'] . '-' . $_POST['month'] . '-' .$_POST['day'];
	
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

						if($_POST['submit'] == 'Search By Rollno'){
						$qry='SELECT * FROM app where rollno="' .$rollser. '"  ORDER BY id DESC';}
						else if($_POST['submit'] == 'search by date'){
						$qry='SELECT * FROM app where date="'.$date.'" ORDER BY id DESC';}

						$result=mysql_query($qry);

						if($result)
						{
							$count = mysql_num_rows($result); 
						}

						if($count==0)
						{
							echo 'No Result Found';
						}
						else
						{
							echo '<table border="1">
							<th>Rollno</th>
							<th>For</th>
							<th>Reason</th>
							<th>Date</th>';
			
							while ($row = mysql_fetch_assoc($result))
							{
								echo '<tr>
								<td>'.$row['rollno'].'</td>
								<td>'.$row['fora'].'</td>
								<td>'.$row['reason'].'</td>
								<td>'.$row['date'].'</td>
								</tr>';
							}

							echo '</table>';
						}
							echo '<form action="app_admin.php" method="post">';
							echo '<input type="submit" name="back" value="Back" class="freshbutton-blue "></form>';

			}
			else{
			?>
			<form action="app_admin.php" method="post">
				<span style="font-weight: bolder;padding-right: 35px;">Rollno</span>
				<input type="text" name="rollser" maxlength="7">
				<input type="submit" name="submit" value="Search By Rollno" class="freshbutton-blue "><br><br><br>
				<!--<input type="date" name="date" maxlength="7">-->
				<table cellpadding = "10">
				<tr>
				<td><span style="font-weight: bolder;padding-right: 35px;">Date </span></td>
				<td>Day<select name = "day">
				<option></option>'
				<?php
				for($i = 1; $i <= 31; $i++){
				echo '<option value='.$i.'>'.$i.'</option>';
				}
				?>
				</select>
				<?php
				$months = array('01'=>'January', '02'=>'February',
				'03'=>'March', '04'=>'April', '05'=>'May',
				'06'=>'June', '07'=>'July', '08'=>'August',
				'09'=>'September','10'=>'October',
				'11'=>'November','12'=>'December');
				?>
				Month<select name = "month">
				<option></option>
				<?php 
				foreach($months as $num => $nm){
				echo "<option value='$num'>$nm</option>";
				}
				?>
				</select>
				Year<select name = "year">
				<option></option>
				<?php
				for($i = date('Y')-2; $i <= date('Y'); $i++){
				echo "<option value='$i'>$i</option>";
				}?>
				</select>
				</td>
				</tr>
				</table>
				<input type="submit" name="submit" value="search by date" class="freshbutton-blue"><br><br><br>
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


			$qry='SELECT * FROM app where date=DATE(NOW()) ORDER BY id DESC';
			$result=mysql_query($qry);
			echo '<h3>Applications For Today-</h3>';
			echo '<table border="1">
			<th>Rollno</th>
			<th>For</th>
			<th>Reason</th>
			<th>Date</th>';
			while ($row = mysql_fetch_assoc($result))
			{
					echo '<tr>
						<td>'.$row['rollno'].'</td>
						<td>'.$row['fora'].'</td>
						<td>'.$row['reason'].'</td>
						<td>'.$row['date'].'</td>
						</tr>';
			}

			echo '</table>';

			

		
?>



<?php } ?>
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