<?php
	session_start();
	unset($_SESSION['user']);
	header('Location:sign_in.php')
?>