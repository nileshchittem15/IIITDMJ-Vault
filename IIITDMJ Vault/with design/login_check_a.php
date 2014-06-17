<html>
	<body>
		<?php

			if($_POST["login_submit_dummy"]=="Sign in")
			{
				$login_email="'".$_POST["login_email"]."'";
				$login_password="'".$_POST["login_password"]."'";

				if($login_email && $login_password)
				{
					//To be changed after dbms creation.
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
					$qry = "SELECT * FROM ACCOUNT WHERE NAME =$login_email";

					//Execute query
					$result = mysql_query($qry);
					if($result)
								{

									while ($row = mysql_fetch_assoc($result))
										{ 
											
											$username="'".$row['name']."'";
											$password="'".$row['password']."'";
											echo "in while";
											echo $username;
											echo $password;
											echo $login_email;
											echo $login_password;
										}
								}
					if($login_email==$username && $login_password==$password)
					{
						session_start();
						$acad="'ACAD'";

						$bus="'BUS'";

						$acad="'ACAD'";

						$hostel="'HOSTEL'";

						$lib="'lib'";

						$shirts="'shirts'";

						$workshop="'workshop'";

						$admin="'admin'";

							if($username==$acad)
									{
										$_SESSION['IS_AUTHENTICATED'] = 1;
									$_SESSION['user']=$username;
									echo $_SESSION['user'];
									header("location:admins_home/app_admin.php");
									}

							if($username==$bus)
									{
										$_SESSION['IS_AUTHENTICATED'] = 1;
									$_SESSION['user']=$username;
									echo $_SESSION['user'];	
									header("location:admins_home/bus_admin.php");
									}
							if($username==$hostel)
									{
										$_SESSION['IS_AUTHENTICATED'] = 1;
									$_SESSION['user']=$username;
									echo $_SESSION['user'];	
									header("location:admins_home/hostel_admin.php");
									}
							if($username==$lib)
									{
										$_SESSION['IS_AUTHENTICATED'] = 1;
									$_SESSION['user']=$username;
									echo $_SESSION['user'];	
									header("location:admins_home/lib_admin.php");
									}
							if($username==$shirts)
									{
										$_SESSION['IS_AUTHENTICATED'] = 1;
									$_SESSION['user']=$username;
									echo $_SESSION['user'];	
									header("location:admins_home/shirts_a.php");
									}
							if($username==$workshop)
									{
										$_SESSION['IS_AUTHENTICATED'] = 1;
									$_SESSION['user']=$username;
									echo $_SESSION['user'];	
									header("location:admins_home/workshop_a.php");
									}
								if($username==$admin)
									{
										$_SESSION['IS_AUTHENTICATED'] = 1;
									$_SESSION['user']=$username;
									echo $_SESSION['user'];	
									header("location:admins_home/admin.php");
									}
					}
					else
					{
						header("location:login_fail_a.php");
						exit();
					}
				}
				else
				{
					header("location:login_fail_a.php");
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