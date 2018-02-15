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
<link rel=stylesheet type=text/css href=css/style.css>
</head>
<body>
	<?php echo $message,', ', $_SESSION['user_name'];  ?>
	<br>
	Last Login: <?php echo $_SESSION['user_last_login'];  ?>
</body>
</html>
