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
	<title>General Basics</title>
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
    height: 250%;
    float: left;
  }
  
#right{
   background: linear-gradient(45deg,  #e3eefc, #fffdfa);
    width: 78%;
    height: 260%;
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
.TTGX{
	padding: 13px;
	margin-left: 1000px;
}
.DCFVGB{
  margin-top: 40px;
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
  height: 2100px;
  width: 700px;
}
.FVGCQ{
  font-family: thin;
  margin-left: 535px;
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

<div>
          <script type="text/javascript" src="https://beststocks.ru/widget.js" async></script>
          <a href="https://beststocks.ru/stock/mrk" title="Котировка акций  Merck & Company" style="visibility:hidden;font-size:0;"></a>
          <iframe
            data-bs-widget
            id="mrk-frame-2148848399"
            title="MRK Frame"
            sandbox="allow-same-origin allow-scripts allow-popups allow-forms"
            scrolling="no"
            style="width: 100%; min-width: 320px; border: none;"
            src="https://beststocks.ru/widget/mrk?id=mrk-frame-2148848399"
          ></iframe>
        </div>


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

<br>
<h1 class="FVGCQ">General Basics</h1>

<div class="container ASDF" > 
</div>
<br><br>

<div class="container EFTF">

<br>

<div class="HUJIKO">
<h4>WHAT ARE CRYPTO TRADING?</h4>
<text>What is the first thing that comes to your mind when you hear the word "trading"? - It's probably numbers, constantly changing indices, quotes and profit which is extremely hard to calculate. Another word for it is "complex". And it was until Crypto Trading came to market. You don't have to be an expert in economics to trade profitably in Crypto Trading. As it is a form of investing, it is obviously still not a piece of cake - you'll need to spend some time learning how it works and how to make accurate predictions in order to be able to make substantial profit. However, the process itself is much easier than, let's say, Forex. Most forms of trading imply that an investor is actually buying an asset, and his profit or losses depend on the changing value of the asset over various periods of time. In Crypto Trading, on the other hand, no real product is bought. Basics of Crypto Trading are fairly simple: based on market tendencies and some other factors, a trader makes prediction about movement of prices of various assets, which most commonly are currency pairs, precious metals and stock.</text>

 
<br>

<br>

<h4>WHAT ASSETS CAN BE TRADED AT CRYPTO TRADING?</h4>

<text>Crypto Trading can be traded with various types of assets. Most commonly they are currency pairs, commodities and indices.</text>

<br><br>
<h4>HOW CRYPTO TRADING WORK?</h4>

<text>One of the reasons Crypto Trading have become so popular is the simplicity of the process: there are just two types of predictions that are required: a trader should decide if the price of the chosen asset will increase or decrease. He then chooses how much he wants to invest and the expiration time of the deal. A trader profit from the return rate, which is stated before the option starts - that makes the outcome perfectly clear. For example, a trader thinks that in two hours the price of EURUSD pair will be higher than at the moment and chooses to invest $10 with 80% return rate. If after two hours the price goes up, - he receives $18 to the account. If it goes down the loss is only the initial investment which is $10.</text>
<br><br>
<h4>WHAT IS TRADING AND WHY DO WE NEED IT?</h4>
<text>The main purpose of trading is to make a profit on trading assets. It can be money, stocks, commodities, cryptocurrencies, etc. You can earn on the purchase and sale of the asset. When a trader buys an asset, they hope that the asset will rise in price and can be sold at a higher price. When a trader sells an asset, they expect to be able to make money by redeeming the asset at an even lower price. In fact, the trader sells what they do not own.</text>
<br><br>

<br><br>
<h4>HOW TO TRADE SUCCESSFULLY?</h4>
<text>To predict the future market value of assets and make money on it, traders use different strategies. One of the possible strategies is to work with news. As a rule, it is chosen by beginners. Advanced traders take into account many factors, use indicators, and know how to predict trends. However, even professionals have losing trades. Fear, uncertainty, lack of patience or the desire to earn more bring losses even to experienced traders. Simple rules of risk management help to keep emotions under control.</text>

<br><br>
<h4>WHAT ARE ASSETS?</h4>

<text>Assets in the trading world are a commodity. These include money, securities, raw materials, indices and digital currencies. The price of an asset is affected by the volume of trades that are made for the asset. The more often an asset is bought, the higher the price becomes. If the asset starts to sell actively, the price falls. The fluctuation in the value of an asset per unit of time is called the rate of volatility. The main trader`s goal is not to buy a commodity, but to make a profit due to the difference between the purchase price and sale price. So, you can earn when the value of the asset rises and when it falls. There are 5 main types of assets: currency pairs, stocks, indices, commodities and crypto currencies.</text>
<br><br>

<h4>CURRENCY PAIRS?</h4>
<text>
Currency pairs are the price ratio of the currencies of two countries. This ratio shows how many monetary units of one currency are worth a unit of another currency. Currency pairs are the most popular assets because of the high volatility rate and as they are easier to analyze. As a rule, 75% of market operations are made in pairs — EUR/USD, GBP/USD, USD/JPY, CHF/USD.</text>

<br><br>
<h4>SHARES AND INDEXES?</h4>
<text>
Features of trading stocks and indices are similar. Shares are securities that give the owner the right to receive dividends and a part of the company's property if the company is sold. And the indices reflect the state of the securities market. Compared to currency pairs, stocks and indices have less risk due to lower rates of volatility. They are better suited for longer-term trades and long-term investments.</text>
<br>
<br><br>
<h4>COMMODITIES??</h4>
<text>
Commodities include oil, gas and metals. As a rule, commodities show high volatility and give a large number of signals for intraday trades.</text>
<br>
<br><br>
<h4>CRYPTO CURRENCIES?</h4>
<text>
Crypto Assets are digital financial instruments. They remain the most unpredictable and are high risk assets. They have an extremely high volatility rating and can move in one direction for an extended period of time.</text>
<br>

<text>
If you want to know more about trading basics, you can easily find the rest of the information in open sources on the Internet.</text>
<br>


</div>
</div>



<br>

<div class="container ASDF" > 
</div>



























































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