<?php 
	session_start();
	header('Content-Type: text/html; charset=utf-8');
  $mysqli = new mysqli ("localhost", "root", "", "base");
      
  if (!$_SESSION['user']) {
    header('Location:sign_in.php');
  }

  $bet = 0;
  if (isset($_POST['DBet'])) {
      if (($_SESSION['user']['balance']>=$_POST['CBet'])&&($_POST['CBet']>149)) {

      $bet = $_SESSION['user']['balance']-$_POST['CBet'];
      $mysqli->query("UPDATE `base`.`users` SET `balance` = '".$bet."' WHERE `users`.`login` = '".$_SESSION['user']['login']."'");
      $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_POST['CBet'];
      $bet = 0;

    }
  }
?>
<!DOCTYPE html>
<html>
<head>
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
	<title>Traiding</title>
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
  	
</head>





<style type="text/css">
body{
	margin: 0;
	height: 1000px;
	background-color: linear-gradient(45deg,  #e3eefc, #fffdfa);

}
li {
    list-style-type: none; /* Убираем маркеры */
   }















.button18 {
  display: inline-block;
  font-size: 12px;
  color: rgb(205,216,228);
  text-decoration: none;
  padding: .2em .8em;
  outline: none;
  border-right: 1px solid rgba(13,20,27,.5);
  border-top: 1px solid rgba(270,278,287,.01);
  background-color: #fffafa;
  
}
.button18:hover {
  background-image:
   radial-gradient(1px 60% at 0% 50%, rgba(255,255,255,.3), transparent),
   radial-gradient(1px 60% at 100% 50%, rgba(255,255,255,.3), transparent),
   linear-gradient(rgb(51,60,67), rgb(58,65,72));
}
.button18:focus {
  color: rgb(245,247,250);
  border-top: 1px solid rgb(67,111,136);
  background-image:
   linear-gradient(rgb(46,95,122), rgb(36,68,92));
}
.button18:focus:hover {
  border-top: 1px solid rgb(49,87,107);
  background-image:
   linear-gradient(rgb(33,77,98), rgb(29,57,77));
}


















#left{
    /*background: #e3eefc;*/
    width: 22%;
    height: 100%;
    float: left;
  }
  
#right{
   background: linear-gradient(45deg,  #e3eefc, #fffdfa);
    width: 78%;
    height: 105%;
    float: left;
  }
.now{
  font-size: 20px;
    padding: 5px;
  border-bottom: 1px dotted gray;
  box-shadow: 5px;
}
.LOL{
	height: 70px;
	border-bottom: 1px dotted black;
}
p{
	width: 200px;
}

.HQN{
	margin-left: 25px;
	width: 20px;
	height: 20px;
}
.FOX{
	margin-top: 100px;
}
.ROT{
	margin-left: 45px;
	font-family: thin;
}
.ROTA{
	margin-left: 45px;
	margin-top: 110px;
	font-size: 20px;
}
.but{
  border-radius: 5px;
  font-family: bold;
  color: #0a66b7;
  margin-top: 5px;
  margin-left: 45px;
  width: 110px;
  height: 40px;
  background-color: #f0be42;
  box-shadow: 10px ;
}
.but_156{
  border-radius: 5px;
  font-family: bold;
  color: black;
  margin-top: 5px;
  margin-left: 55px;
  width: 110px;
  height: 40px;
  background-color: limegreen;
  box-shadow: 10px ;
}
.but_15{
  border-radius: 5px;
  font-family: bold;
  color: black;
  margin-top: 5px;
  margin-left: 15px;
  width: 110px;
  height: 40px;
  background-color:orangered;
  box-shadow: 10px ;
}
.but_125{
  border-radius: 5px;
  font-family: bold;
  color: black;
  margin-top: 5px;
  margin-left: 15px;
  width: 110px;
  height: 40px;
  background-color:floralwhite;
  box-shadow: 10px ;
}
.but_2{
  border-radius: 5px;
  font-family: bold;
  color: #0a66b7;
 	margin-left: 400px;
 	margin-top: 35px;
  width: 110px;
  height: 40px;
  background-color: #f0be42;
  box-shadow: 10px ;
}
.ASDF{
  border-bottom: 1px dotted grey;
}
button.yt-icon-button:focus {
    vertical-align: middle;
    color: #01a715;
}
.but_3{
  border-radius: 5px;
  font-family: bold;
  color: #0a66b7;
  margin-top: 35px;
 	margin-left: 10px;
  width: 110px;
  height: 40px;
  background-color: #f0be42;
  box-shadow: 10px ;
}
.but_1{
  border-radius: 5px;
  font-family: bold;
  color: #0a66b7;
  margin-top: 5px;
  margin-left: 25px;
  width: 110px;
  height: 40px;
  background-color: #f0be42;
  box-shadow: 10px ;
}
.BOR{
	margin-top: 20px;
}
.LOL_1{
	height: 70px;
}
.KOK{
	margin-top: 20px;
	border: 1px dotted grey;
	;
}

.JOCS{
	margin-top: 20px;
	margin-left: 100px;
	width: 500px;
	padding: 30px;
	border: 1px dotted grey;
}
.JOCS_1{
	margin-top: 20px;
	margin-left: 20px;
	width: 500px;
	padding: 30px;
	border: 1px dotted grey;
}
.UHU{

	margin: 20px;
		
}
.MMM_12{
  margin-top: 10px;
  margin-left: 135px;
  margin-bottom: 10px;
}
.UHU_1{
	margin: 20px;	
	
}
.MOL{
	padding: 35px;
}
.OKO{
	padding: 30px;
	margin-left: -100px;
	font-size: 25px;

}
p{
	font-family: thin;
}
.UFE{
	margin-left: 120px;
}
#QERT{
	color: blue;

	font-size: 25px;
}
.QERTY{
	color: blue;
	margin-left: 50px;
	font-size: 25px;	
}
.TTGX{
	padding: 13px;
	margin-left: 1000px;
}
.RFD{
	text-decoration: none;
	font-size: 20px;
}
.LPLP{

	border: 1px dotted grey;
	width: 1320 px;
}
.RFGT{
  margin-top: 55px;
}
.QQQ{
	border: 1px dotted grey;
}
.HFD{
	margin-left: 80px;
}
#div5{
  display: none;
}

.GUHU{
  margin-top: 225px;
  height: 200px;
  margin-left: -30px;
  border: 1px dotted gray;
}
.MMM{
  margin-top: 30px;
}
.MMM_1{
  margin-top: 20px;
  margin-left: 50px;
}
.LLL{
  width: 400px;
  margin-top: 40px;
  margin-left: 5px;
}
</style>
</head>
 
<body>
 
  <div id="left">
  		<div class="HQN"><img src="7.png"></div>
  		<div class="FOX">
  			
  			<p class="ROTA">CASH BALANCE<br> <?php echo $_SESSION['user']['balance'];?>.0 USD</p>
  		
  			<button class="but"><a href="deposit.php" class="nav-link">DEPOSIT</a></button>
  				<button  class="but_1"><a href="withdraw.php" class="OPO">WITHDRAW</a></button>
  		</div>
  	
	
	
		 	<h3 class="ROT BOR">Menu</h3>	
        <div align="center" class="FXA"><p align="center"><a class="nav-link now"  href="user.php">Dashboard</a></p></div>  
  
      
        <div align="center"><p align="center"><a class="nav-link now" href="user_2.php">My Account</a></p></div>  
      
       
       
           <div align="center"><p align="center"><a class="nav-link now" href="traiding.php">Tradind</a></p></div>
       
        
      <div align="center">  <p align="center"><a class="nav-link now" href="addres.php">Internal addresses</a></p></div>
       
  
    
    <div align="center">  <p align="center"><a class="nav-link now" href="support.php">Support</a></p></div>

      <div align="center">  <p align="center"><a class="nav-link now" href="verif.php">Verification</a></p></div>
       
    <div align="center">  <p align="center"><a  class="nav-link now " href="secure.php">Secure Deal</a></p></div>
    
    <div align="center">  <p align="center"><a class="nav-link now" href="news.php">News</a></p></div>



<br>

<br>

<br>

<br>



<p align="center" class="HFD">© 2017 - 2022 <br> Все права защищены</p>
	</div>

 


















 <div id="right">

<div class="LOL">
<div class="container">
<p class="TTGX"><a href="user_2.php" class="RFD">Personal account</a><?php echo " ".$_SESSION['user']['name'];?>
  <a href="logout.php" class="RFD">Exit</a>
</p>
</div>
</div>




<div class="container LOL_1">
	<div class="row">
		<div class="col-sm-4 MOL"><h2 align="center">Welcome,<?=$_SESSION['user']['name']?></h2></div>
		<div class="col-sm-8"><button  class="but_2"><a href="deposit.php" class="nav-link">DEPOSIT</a></button><button  class="but_3"><a href="withdraw.php" class="OPO">WITHDRAW</a></button></div>
	</div>
</div>

<br>

<div class="container">
  <div class="row">
    <div class="col-sm-8">

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_3e95d"></div>

  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 780,
  "height": 610,
  "symbol": "BYBIT:APEUSDT",
  "interval": "1",
  "timezone": "exchange",
  "theme": "light",
  "style": "2",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
  "container_id": "tradingview_3e95d"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->

    </div>
    <div class="col-sm-4 GUHU" >
       <form action="#" method="POST">
          <input type="text" name="CBet" class="LLL" placeholder="Enter your amount">

     <br>
    
     <li><input type="button" class="but_156 MMM" name="BET_1" value="UP"> <input type="button" class="but_15 MMM_1" name="BET_2" value="DOWN"></li>

          <li><button  name="DBet" class="but_125 MMM_12"  onmousedown="viewDiv5()">Place a bet</button></li>
       </form>
     <div id="div5"><p>Ставка сделана</p></div>
    </div>
  </div>
</div>







<script type="text/javascript">

function viewDiv5(){
  document.getElementById("div5").style.display = "block";
};
</script>





























<br>

<div class="container ASDF" > 
</div>







<div class="container">
  <div class="row">
      <div class="col-sm-3 YFZ RFGT">
          <ul>
          
          <li class="GYU"><a class="nav-link" href="anvar.rakhmonoff@yandex.ru">anvar.rakhmonoff@yandex.ru</a></li>
          <li class="GYU ICR"><a class="nav-link"  href="#">84 Hampton Court Rd<br> +44-20-147-59-37</a></li>
        </ul>
      </div>
      <div class="col-sm-3 YFZ RFGT">
       
          <ul >
          <li class=""><a class="nav-link"  href="crypto.php">Криптовалюта</a></li>
          <li class=""><a class="nav-link"  href="basik.php">Общие основы</a></li>
          <li class=""><a class="nav-link"  href="before.php">Прежде чем начать</a></li>
        </ul>
      </div>
      <div class="col-sm-3 YFZ RFGT">
          <ul>
          <li class=""><a class="nav-link"  href="cond.php">Условия использования</a></li>
          <li class=""><a class="nav-link"  href="conf.php">Политика конфиденциальности</a></li>
          <li class=""><a class="nav-link"  href="conc.php">Политика безопасности</a></li>
        </ul>
      </div>
      <div class="col-sm-3 YFZ RFGT">
        <ul list-style-type="none">
          <li class=""><a class="nav-link"  href="about.php">О нас</a></li>
          <li class=""><a class="nav-link"  href="cookies.php">Политика использования cookie-файлов</a></li>
          <li class="" ><a class="nav-link"  href="vus.php">Связаться с нами</a></li>
        </ul>
      </div>
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