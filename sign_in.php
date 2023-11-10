<?php 
session_start ();
header('Content-Type: text/html; charset=utf-8');
if ($_SESSION['user']) {
		header('Location:user.php');
}
if (isset($_POST['donen'])) {
	$mysqli = new mysqli ("localhost", "root", "", "base");
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass = md5($pass);
$result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();

if (count($user)==0) {
	echo "This user does not exist";
}else{
	$_SESSION['user']['id']=$user['id'];
	$_SESSION['user']['name']=$user['name'];
	$_SESSION['user']['login']=$user['login'];
	$_SESSION['user']['balance']=$user['balance'];
	$_SESSION['user']['regdata']=$user['regdata'];
	$_SESSION['user']['email']=$user['email'];
	header('Location:user.php');
	}
	$mysqli->close();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorizathion</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&family=Playfair+Display&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
 
  
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta charset="utf-8">
	
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
  	
</head>
<style type="text/css">
	
.split {
    height: 100%;
    width: 30%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

.left {
    left: 0;
    
    /*background-color: #e3eefc;*/
    
}

.right {
	width: 70%;
    left: 30%;
    background-color: linear-gradient(45deg,#f5f6fa ,#ffffff);
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.centered {
	height: 300px;
    width: 250px;
    border:1px solid black;
  
}
.centered_1 {

	margin-top: 18.9%;
	margin-left: 30%;
  

}
.YHQ{
	margin-top: 0px;
}




.DCC{

	margin-top: 20px;
}

.ASP_1{
	margin-top: 50px;
	border: 0.5px solid black;
}
.ASP_2{
	border: 0.5px solid black;

}
.TGYH{
	border: 1px dotted black;
}
.but{
	margin-top: 5px;
  border-radius: 15px;
  font-family: bold;
  color: #0a66b7;
  width: 150px;
  height: 30px;
  background-color: #f0be42;
  box-shadow: 10px ;
  

</style>
<body>

<div class="split left">
  <div class="centered">
    
    <h2 class="DCC"> Authorization</h2>
    <form action="sign_in.php" method="post" class="ESB">
	
	<label >
		<input  type="text" name="login" placeholder="Enter your login"  class="ASP_1">
	</label>
	<br>
	<br>
	<label>
		<input type="password" name="pass" placeholder="Enter your password" class="ASP_2">
	</label>
	<br>
	<br>
	<label>
		<button type="submit" class="but" name="donen" >ENTER</button>
		<a class="nav-link YHQ" href="sign_up.php">Create account</a>
	</label>

</form>


  </div>
</div>

<div class="split right">
  <div class="centered_1" >
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide1.jpg" class="d-block w-10 TGYH" alt="..." width="500px" height="300px" align="center">
    </div>
    <div class="carousel-item">
      <img src="slider3.jpg" class="d-block w-10 TGYH" alt="..." width="500px" height="300px">
    </div>
   
  </div>
</div>
<br>
<div><h4 >Comfortable panel</h4>
<p>You can trade on any currency pairs in 2 clicks</p>
</div>
  </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jscript.js"></script>	
    <script type="text/javascript" src="scriptt.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>