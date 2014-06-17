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
			
			$query="SELECT * FROM shirts";
			$result=mysql_query($query);
			
			echo '<form action="shirts_a_result.php" method="post"><select name="shirts" style="font-size: 17;"><option>Select Shirts</option>';
			
			while($row=mysql_fetch_assoc($result))
			{
				echo '<option value='.$row["SHIRT_ID"].'>'.$row['SHIRT_ID'].'</option>';
			}
			echo '</select><br />';
			echo '<input type="submit" class="freshbutton-blue " /></form><br />';

			//Add new workshop
			echo '<form action="shirts_a_new.php" ><span style="font-weight: bolder;padding-right: 0px;">Add new Shirt</span><br />';
			echo '<input type="submit" value="Proceed" class="freshbutton-blue "/></form>';
			
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
