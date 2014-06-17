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
			echo '<table border="0" cellpadding="10" align="center"><form action="shirts_a_new_ext.php" method="post">';
			echo '<tr><td>Shirt ID*</td><td><input type="text" name="id"/></td>
				  <tr><td>LastDate*</td><td><input type="text" placeholder="yyyy-mm-dd" name="lastdate"/></td></tr>
				  <tr><td>Image ID*</td><td><input type="text" name="imageid"/></td>
				  <tr><td>Amount*</td><td><input type="text" name="amount"/></td></tr>
				  <tr colspan="2"><td align="center" ><input type="submit" value="Proceed" class="freshbutton-blue "></td></form>';
				  echo '<td align="center"><a href="shirts_a.php"><input type="submit" name="back" value="Back" class="freshbutton-blue "></a></td></tr></table>';
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
