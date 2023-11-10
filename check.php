

<?php

	

	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
	$check = 0;
	$mysqli = new mysqli('localhost','root','','mybase');
	if (($login == "")||(strlen($login)<3)){
		echo "Login is not correct"."<br/>";
		$check = 1;
	}
	if (($name == "")||(strlen($name)>15)) {
		echo "Name is not correct"."<br/>";
		$check = 1;
	}
	if (($pass == "")||(strlen($pass)<5)) {
		echo "Password must be 6 and more";
		$check = 1;
	}


	



	$user = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login'");
	if (($user->num_rows)>0) {
		echo "This user exist";
		exit();
	}elseif (check == 1) {
		exit();
	}else{

		$pass = md5($pass."Abrakadabra");
		$mysqli->query("INSERT INTO `users` (`login`,`password`,`name`) VALUES ('$login','$pass','$name')");
		$mysqli->close();
		
	}

	
	
?>
