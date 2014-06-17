<html>
	<head>
		<link href="default.css" rel="stylesheet" type="text/css">
		
	</head>
	<body>
	<?php
//Destroy the session
session_start();
session_unset();
session_destroy();
?>
		<div id="outer_frame">
			
			<div id="page-header" class="page-header-border">
				<div id="inner-page-header" >
					<a href=# id="home-icon">
						<img width="300" src="images/iiit.png" class="home-icon-container">
					</a>
				</div>
			</div>
			
			<div id="page-content">
				
					<div id="login-container">
						<div class="splash" >
							<img width="286" height="300"src="images/safe.jpg">
						</div>
						<form action="login_check_s.php" method="post" name="login">
						
							<div class="error_box1">
								<div class="error_text1">You Have Succesfully Logged Out.</div>
							</div>
							<div class="alternative-option">or <a href="login_a.html" id="register-link">Admin Login</a></div>
							<div class="page-header-text">Student Login</div>
							<div id="login-partial">
								
								<div id="email-field" class="sick-input ">
									<input autofocus="1" tabindex="1" type="text" name="login_email" id="login_email" placeholder="Email">
								</div>
								
								<div id="password-field" class="sick-input">
									<input type="password" id="login_password" name="login_password" tabindex="2" placeholder="Password">
								</div>
								
								<div id="login-footer" class="clearfix">
									<input name="login_submit_dummy" value="Sign in" class="freshbutton-blue" type="submit" id="login_submit" tabindex="4">
								</div>	
										
							</div>
						</form>
					</div>
				
			</div>
			
			<div id="page-full-footer">
				<div id="footer-top-margin"></div>
				<div id="footer-border"></div>
			</div>
			
		</div>
	</body>
</html>