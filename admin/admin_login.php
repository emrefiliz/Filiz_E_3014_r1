<?php
	require_once('phpscripts/config.php');
		$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>
<!doctype html>
<html class="no-js">
	<head>
		<meta charset="UTF-8">
		<title>Welcome to your admin panel login</title>
		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<!-- Compressed CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css"/>
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="grid-x grid-margin-x">
			<div class="cell medium-4 medium-offset-4">
				<form action="admin_login.php" method="post" class="log-in-form">
					<div class="grid-x grid-padding-x">
						<div class="medium-12 cell">
							<h3 class="text-center">Log In</h3>
						</div>
						<div class="medium-12 cell">
							<h5>Username<small class="asterix">*</small>
							<input type="text" name="username">
							</h5>
						</div>
						<div class="medium-12 cell">
							<h5>Password<small class="asterix">*</small>
							<input type="password" name="password">
							</h5>
							<p class="help-text" id="passwordHelpText"><?php if(!empty($message)){ echo $message;} ?></p>
							<p><input type="submit" name="submit" class="button expanded" value="Log in"></input></p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
	<!-- Compressed JQuery & Foundation JavaScript -->
	<script	src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
</html>