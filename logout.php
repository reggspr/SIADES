<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	unset($_SESSION['level']);
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=login.php'>";
?>