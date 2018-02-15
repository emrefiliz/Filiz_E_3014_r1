<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
	switch (true) {
	case date("H") >= 6:
		$message = "Good Morning";
	case date("H") >= 12:
		$message = "Good Afternoon";
	case date("H") >= 16:
		$message = "Good Evening";
	default:
		$message = "Good Night";
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Welcome to your admin panel</title>
		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<!-- Compressed CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css"/>
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="card" style="width: 300px;">
			<div class="card-divider">
				<h4><?php echo $message,', ', $_SESSION['user_name'];  ?></h4>
			</div>			
			<div class="card-section">
				Last Login: <?php echo $_SESSION['user_last_login'];  ?>				
			</div>
		</div>
	</body>
	<!-- Compressed JQuery & Foundation JavaScript -->
	<script	src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
</html>