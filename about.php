<?php 
	session_start();
	header('Content-Type: text/html; charset=utf-8');
  if (!$_SESSION['user']) {
    header('Location:sign_in.php');
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
	<title>Privacy Policy</title>
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
    height: 170%;
    float: left;
  }
  
#right{
   background: linear-gradient(45deg,  #e3eefc, #fffdfa);
    width: 78%;
    height: 170%;
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
.li{
  font-size: 20px;
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
.but_23{
  border-radius: 5px;
  font-family: bold;
  color: black;
  margin-top: 5px;
  margin-left: 10%;
  width: 500px;
  height: 40px;
  background-color: #f0be42;
  box-shadow: 10px ;
}
.but_156{
  border-radius: 5px;
  font-family: bold;
  color: black;
  margin-top: 5px;
  margin-left: 80px;
  width: 110px;
  height: 40px;
  background-color: #fffafa;
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
  background-color: #fffafa;
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
.but_16{
  border-radius: 5px;
  font-family: bold;
  color: #0a66b7;
  margin-top: 35px;
  margin-left: 220px;
  width: 210px;
  height: 30px;
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
.UHU_1{
	margin: 20px;	
	
}
.UHVZ{
  
  margin-left: 10%;
  width: 500px;
  height: 300px;

  text-align: left;
  font-size: 30px;
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
h4{
  font-family: thin;
}
.TTGX{
	padding: 13px;
	margin-left: 1000px;
}
.DCFVGB{
  margin-top: 40px;
}
.TGY{
  text-decoration: none;
}
.RFD{
	text-decoration: none;
	font-size: 20px;
}
.dodo{
  border-left: 1px dotted grey;
  height: 600px;
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
.NIQKJ{
  width: 500px;
  height: 300px;
  margin-left: 85px;
}
.HFD{
	margin-left: 80px;
}

.GUHU{
  margin-top: 100px;
  margin-left: -30px;
}
.ASDF{
  border-bottom: 1px dotted grey;
}
.gyhuji{
  margin-top: 45px;
}
.HUJI{
  margin-left: 25%;
  width: 700px;
}
.HUGYFTR{
  margin-left: 300px;
}
.EFTF{
  border: 1px dotted grey;
  height: 1100px;
  width: 700px;
}
.FVGCQ{
  font-family: thin;
  margin-left: 515px;
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
       
        
    	<div align="center">	<p align="center"><a class="nav-link now" href="addres.php">Internal addresses</a></p></div>
       
		
		<div align="center">	<p align="center"><a class="nav-link now" href="support.php">Support</a></p></div>

    	<div align="center">	<p align="center"><a class="nav-link now" href="verif.php">Verification</a></p></div>
       
		<div align="center">	<p align="center"><a  class="nav-link now " href="secure.php">Secure Deal</a></p></div>
		
		<div align="center">	<p align="center"><a class="nav-link now" href="news.php">News</a></p></div>


<div>
          <script type="text/javascript" src="https://beststocks.ru/widget.js" async></script>
          <a href="https://beststocks.ru/stock/tsla" title="Котировка акций  Tesla" style="visibility:hidden;font-size:0;"></a>
          <iframe
            data-bs-widget
            id="tsla-frame-9477102208"
            title="TSLA Frame"
            sandbox="allow-same-origin allow-scripts allow-popups allow-forms"
            scrolling="no"
            style="width: 100%; min-width: 320px; border: none;"
            src="https://beststocks.ru/widget/tsla?id=tsla-frame-9477102208"
          ></iframe>
        </div>
  <div>
          <script type="text/javascript" src="https://beststocks.ru/widget.js" async></script>
          <a href="https://beststocks.ru/stock/baba" title="Котировка акций  Alibaba" style="visibility:hidden;font-size:0;"></a>
          <iframe
            data-bs-widget
            id="baba-frame-9747287492"
            title="BABA Frame"
            sandbox="allow-same-origin allow-scripts allow-popups allow-forms"
            scrolling="no"
            style="width: 100%; min-width: 320px; border: none;"
            src="https://beststocks.ru/widget/baba?id=baba-frame-9747287492"
          ></iframe>
        </div>




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

<br>
<h1 class="FVGCQ">ABOUT US</h1>

<div class="container ASDF" > 
</div>
<br><br>

<div class="container EFTF">

<br>

<div class="HUJIKO">





<br>

<h4>ABOUT BITXBTC</h4>

<text>Founded in 2017 by cybersecurity engineers, BITXBTC is the premier exchange and trading platform, providing lightning-fast trade and exchange execution, dependable digital wallets and industry-leading security practices. Our mission is to help advance the exchange and trading industry by fostering innovation, incubating new and emerging technology, and driving transformative change.</text>

<br>


<br>
<h4>WHAT MAKES BITXBTC DIFFERENT?</h4>

<text>Secure platform – BITXBTC employs the most reliable, effective security technologies available. We leverage an elastic, multi-stage wallet strategy to ensure that the majority of funds are kept in cold storage for additional safety. Also, BITXBTC enables two-factor authentication for all users and provides a host of additional security features to provide multiple layers of protection. At BITXBTC, security will always be a top priority in every decision we make.</text>
<br><br>


<text>
  Custom-built trading engine – Our custom trading engine was designed to be scalable and to ensure that orders are executed in real-time.
<br><br>
Fast deposits and withdrawals – Our highly efficient and automated monitoring platform allows us to provide users the fastest transactions available today. This includes updates on balance, trade, and wallet information.
<br>
Driving Innovation – To help drive innovation in the exchange industry, BITXBTC is committed to supporting both new and established engines. BITXBTC seeks to provide its users with best of technologies.
<br>
Commitment to compliance – BITXBTC is committed to complying with all current . regulations that help prevent, detect and remediate unlawful behavior by customers when using the BITXBTC Trading Platform or any of the company’s other services.
<br><br>
BITXBTC has been also established by trading professionals possessing solid practical experience of trading on financial markets. The service provides a mass user with the opportunity to start working on the market of Crypto Trading with the help of the BITXBTC leading Trading Platform. Today, the BITXBTC Platform is regarded as the most advanced platform and is optimized for simultaneous use by a large number of traders and investors.
<br>
The special feature of Crypto Trading is the possibility to know possible profit/loss amounts beforehand, which means that they can be used for hedging exchange risks on the spot market. You don’t need to apply leverage either, so you aren’t exposed to the risks associated with the margin trading. The Platform of the BITXBTC is realized in a web-interface and doesn't require installing any special software onto a user's computer. It's quite simple, as compared with trading platforms used on the spot market, therefore it perfectly suits for studying peculiarities of financial markets. Crypto Trading is transparent and convenient way to invest any volume, especially when you are a beginner investor in the financial markets.
<br><br>
Thank you for having chosen our service!
</text>
<br><br>
<br>



</div>
</div>



<br><br>
<br>


<div class="container ASDF" > 
</div>












<br>

<br>












































<br>

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
          <li class=""><a class="nav-link"  href="conc.php">Условия использования</a></li>
          <li class=""><a class="nav-link"  href="conf.php">Политика конфиденциальности</a></li>
          <li class=""><a class="nav-link"  href="cond.php">Политика безопасности</a></li>
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