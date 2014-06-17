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
			
			if($_POST['id'] && $_POST['lastdate'] && $_POST['imageid'] && $_POST['amount'])
			{
				session_start();
				mysql_connect('localhost','root','') or die("Unable to connect server.Try again later");
				mysql_select_db('iiitdmjv') or die("Unable to connect to database.Try again later");
				$id=$_POST['id'];$lastdate=$_POST["lastdate"];
				$amount=$_POST["amount"];$imageid=$_POST["imageid"];
				$query="INSERT INTO shirts VALUES('$id','$lastdate','$imageid',$amount)";
				$result=mysql_query($query);
				if($result)
					echo "New Shirt added successfully";
				else
					echo mysql_error();
				echo '<a href="shirts_a.php"><input type="submit" name="back" value="Back" class="freshbutton-blue "></a>';
			}
			else
			{
				header("location:shirts_a_newe.php");
				
				exit();
			}
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
