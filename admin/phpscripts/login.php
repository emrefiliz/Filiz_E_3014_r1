<?php
	function logIn($username, $password, $ip) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
		$user_set = mysqli_query($link, $loginstring);
		//echo mysqli_num_rows($user_set);
		if(mysqli_num_rows($user_set)){
			$founduser = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $founduser['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name']= $founduser['user_fname'];
			$_SESSION['user_last_login'] = $founduser['user_last_login'];
				if(mysqli_query($link, $loginstring)){
					// Update IP
					$updateIp = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
					$updateIpQuery = mysqli_query($link, $updateIp);

					// Update Last Login
					$updateLastLogin = "UPDATE tbl_user SET user_last_login = NOW() WHERE user_id = {$id}";
					$updateLastLoginQuery = mysqli_query($link, $updateLastLogin);					
				}
			redirect_to("admin_index.php");
			} else {
			$message = "You have entered an invalid username or password.";
			return $message;
		}
		mysqli_close($link);
	}
?>