<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
<link rel=stylesheet type=text/css href=css/style.css>
</head>
<body>
	Last Login: <?php echo $_SESSION['user_last_login'];  ?>
	<br>
	<?php echo $_SESSION['user_name'];  ?>
</body>
</html>
