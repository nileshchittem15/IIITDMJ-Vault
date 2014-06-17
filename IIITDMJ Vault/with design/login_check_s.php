<html>
	<body>
		<?php

			if($_POST["login_submit_dummy"]=="Sign in")
			{
				$login_email=$_POST["login_email"];
				$login_password=$_POST["login_password"];
				if($login_email && $login_password)
				{

					$link = mysql_connect('localhost', 'root','');
					//Check link to the mysql server
					if(!$link){
					die('Failed to connect to server: ' . mysql_error());
					}
					//Select database
					$db = mysql_select_db('iiitdmjv');
					if(!$db){
					die("Unable to select database");
					}
					//Create query
					$qry = "SELECT * FROM STUDENTS WHERE ROLLNO =$login_email";

					//Execute query
					$result = mysql_query($qry);
					if($result)
								{
									while ($row = mysql_fetch_assoc($result))
										{ 
											
											$username=$row['ROLLNO'];
											$password=$row['PASSWORD'];
											
										}
								}

					//To be changed after dbms creation.
					if($login_email==$username && $login_password==$password)
					{
						session_start();
						$_SESSION['user']=$username;	
						header("location:home.php");
					}
					else
					{
						header("location:login_fail_s.php");
						exit();
					}
				}
				else
				{
					header("location:login_fail_s.php");
				}
			}
			else
			{
				header("location:index.html");
				exit();
			}
		?>
	</body>
</html>