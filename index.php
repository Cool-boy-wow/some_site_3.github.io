<?
    header('Content-Type: text/html; charset=utf-8');

    if (isset($_POST["dane"])) {
      header('Location:sign_in.php');
    }
    if (isset($_POST["done"])) {
      header('Location:sign_up.php');
    }
    if (isset($_POST["Traiding"])) {
      header('Location:sign_up.php');
    }
    if (isset($_POST["KNOPKA"])) {
      header('Location:sign_up.php');
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
 <link rel="stylesheet" href="/examples/libs/simple-adaptive-slider/simple-adaptive-slider.min.css">
  
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Main page</title>
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
    
<!-- Подключаем CSS слайдера -->
  <link rel="stylesheet" href="/examples/libs/simple-adaptive-slider/simple-adaptive-slider.min.css">
  <!-- Подключаем JS слайдера -->
  <script defer src="/examples/libs/simple-adaptive-slider/simple-adaptive-slider.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // инициализация слайдера
      var slider = new SimpleAdaptiveSlider('.slider', {
        autoplay: false,
        interval: 5000,
        swipe: true,
      });
    });
  </script>

<style type="text/css"> 
 

</head>

  


.bok{
  background-image: url("blmain.png");
  height: 850px;
  margin-top: 400px;
}

h3{
  font-family: 'Roboto', sans-serif;
}

.but{
  border-radius: 15px;
  font-family: cursive;
  color: #0a66b7;
  margin-top: 20px;
  margin-left: 45px;
  width: 150px;
  height: 50px;
  background-color: #f0be42;
  box-shadow: 10px ;
}

.but66{
  border-radius: 15px;
  font-family: cursive;
  color: #0a66b7;
  font-size: 25px;
  margin-top: 20px;
  margin-left: 115px;
  width: 150px;
  height: 50px;
  background-color: #f0be42;
  box-shadow: 10px ;
}
.but667{
  border-radius: 15px;
  font-family: cursive;
  color: #0a66b7;
  font-size: 25px;

  margin-left: -750px;
  
  width: 150px;
  height: 50px;
  background-color: #f0be42;
  box-shadow: 10px ;
}

body{
  background-color: #e3eefc;
}

.zag{
  margin-left: -10px;
  color: #0a66b7;
  margin-top:40px;
  font-size: 70px;
}
.XCV{
  font-family: thin;
  margin-top:20px;
  font-size: 40px; 
  color: #0a66b7;
}
.EWQ{
  font-family: thin;
  margin-top: 20px;
  margin-left: 40px;
  font-size: 40px; 
  color: #0a66b7;
}


.main-text{
  font-size: 100px;
  background: url(People.png);
  color: transparent;
  -webkit-background-clip:text;
  animation: animateZ 30s infinite linear;
}

@keyframes animateZ{
  0%{
    background-position: 0 0 ;
  }
  50%{
    background-position: 100% 100%;
  }
  100%{
    background-position: 0% 0%;
  }
}



.HJK{
  font-size: 25px;
}


.IOP{
  margin-left: 100px;
  
}


.LKJ_1{
  margin-top: 25px;
  width: 150px;
  height: 150px;
  animation: rotatedE 4s 0s infinite linear;
}

.LKJ_2{
  margin-top: 25px;
  width: 150px;
  height: 150px;
  animation: rotatedE 4s 1s infinite linear;
}

.LKJ_3{
  margin-top: 25px;
  width: 150px;
  height: 150px;
  animation: rotatedE 4s 2s infinite linear;
}

.LKJ_4{
  margin-top: 25px;
  width: 150px;
  height: 150px;
  animation: rotatedE 4s 3s infinite linear;
}


.IUY{
  background-color: #e3eefc;
  height: 500px;

}

.DSA{
  font-size: 20px;
}

.HGF{
  box-shadow: 10px;
  border: 2px dotted greenyellow;
  height: 700px;
  background-color: #ffbdd3;
  width: 100%;
  
}


}

@keyframes rotated{
  0% {
    
    transform: scale(1);
  }
  50% {
    
    transform:scale(2);
  }
  100% {
    
    transform: scale(1);
  }
  
}


.TRE_1{
  width: 100px;
  height: 300px;
  margin-left: 200px;
  
  animation: rotated 3s 0s infinite linear;
  
}
.TRE_2{
  margin-left: 200px;
}

    .box {
      margin:30px;
      border-radius: 20px;
      width: 480px;
      height: 480px;
      
    
    }
.RFGT{
  margin-top: 185px;
}


.FDE{
  font-family: 'Playfair Display', serif;
  font-size:25px;
}


.WDV{
  margin-top: 30px;
  margin-left: -50px;
  font-family: 'Playfair Display', serif;

  font-size: 50px;
}





.THV{
  border :2px dotted white;
}



#overflow{
  width: 100%;
  overflow: hidden;
}

.ag{
  background-color: #dcdcdc;
  height: 150px;
}

.Header{
  background-color: #e7e8e6;
}

.min{
  width: 10px;
}



h2{
  color: #0628f6;
}
#cont{
  background: url(team.png);
}


.simple{
  width: 60px;
  height: 100px;
  animation: rotate 3s 0s infinite linear;

}

@keyframes rotate{
  0% {
    
    transform: scale(1);
  }
  50% {
    
    transform:scale(2);
  }
  100% {
    
    transform: scale(1);
  }
  
}

.NHT_1{
  margin-left: 50px;
  margin-top: -150px;
   animation: rotated 4s 0s infinite linear;
}

.NHT_2{
  margin-top: 400px;
  width: 200px;
  margin-right: 0px;
  animation: rotated 4s 1s infinite linear;
}

@keyframes rotated{
  0% {
    
    transform: scale(1);
  }
  50% {
    
    transform:scale(1.07);
  }
  100% {
    
    transform: scale(1);
  }
  
}

@keyframes rotatedE{
  0% {
    
    transform: scale(1);
  }
  50% {
    
    transform:scale(1.15);
  }
  100% {
    
    transform: scale(1);
  }
  
}


#But_t{
  
  margin-left: 350px;
 
}

li {
    list-style-type: none; /* Убираем маркеры */
   }


.UHB{

  margin-left: 70px;
}


.QHV{
  background-color: #d5e6fb;
  height: 850px;
}


.GYU{
  margin-top: 50px;
}

.PG_1{
  height: 600px;
  border-left: 5px solid #927eed;
  border-bottom: 5px solid #927eed;
  
}

.TGQ{
  font-family:serif; 
  color: #0a66b7;
}
.PG_3{
  height: 600px;
  
  
  border-right: 5px solid #927eed;
}

.PG_5{
  height: 600px;
  border-left: 5px solid #927eed;
  border-top: 5px solid #927eed;
}

.GEC{
  margin-top: 110px;
  border:7px solid #e3eefc;
  border-radius: 20px;
}
.GEC2{
  margin-top: 110px;
  box-shadow: 5px;
  border-radius: 20px;
  height: 450px;
  width: 450px;
}

.NYP{
  font-family: cursive;
  font-size: 30px;
  color: green;
}

.FXB_1{
  margin-top: 120px;
  margin-right:120px;
}
.FXB_2{
  margin-top: 20px;
}
.FXB_3{
  margin-top: 120px;
}
.FXB_4{
  margin-top: 20px;
  margin-right:120px;
}
.EFI{
  margin-left: 30px;
}


.COP{
  margin-top: 100px;
  margin-left: 40px;
}

.YGE_1{

}
.YGE_2{
  
}

.NJI_1{
  margin-top: 100px;
  margin-left: 130px;
  border :7px solid #e3eefc;
  border-radius: 20px;
}
.NOA{
  margin-left: 40px;
}

.ICR{
  margin-top: -10px;
}

#ZAGOLOVOK{
  margin-top: -220px;
  font-family: thin;
}

.RFGT_1{
  margin-top: 260px;
}

.QIV{
  margin-bottom: -150px;
  font-family: thin;
}

.HIR{

  background-color: green;
  
}

.ROC{
  background-color: blue;

}

.komp{

  font-family: serif;
  font-size: 70px;
  color: #0a66b7;
}


.KOP{
  margin-top: -150px;

}

.qsdewadw{
  
  margin-bottom: 70px;
  
}


.hhhhj{
  border: 1px dotted green;
}
.p223p{
  margin-top: 2px;
  margin-left: -10px;
  height: 700px;
  width: 600px;
}



.goga{
  width: 20%;
  height: 20%;
}

.pik1{
  width: 20%;
  height: 600px;

}
.pik2{
  width: 40%;
  height: 300px;
  margin-left: -5px;
}
.pik3{
  width: 40%;
  height: 300px;
  margin-left: -5px;
}
.pik4{
  width: 20%;
  margin-left: -5px;
}
.pik5{
  width: 20%;
  margin-left: -4px;
}
.pik6{
  width: 20%;
  margin-left: -5px;
}
.ROIKt{
  border: 1px dotted greenyellow;
  height: 700px;
  margin-bottom: 200px;
  background-image: url(4443.png);
}

.UPUN{
  height: 700px;
}
.UPUN1{
  height: 350px;

}

.UPUN2{
  height: 350px;

}
.UPUN3{
  height: 350px;
}

.UPUN4{
  height: 350px;
}
.NCQx{
  margin-left:140px;
}
.BOJc{
 margin-left: -140px;
}

.BBBVV{
  margin-left: 50px;
}

.LOKMM{
  height: 725px;
  border: 2px dotted greenyellow;
  margin-right: -10;

}

.img222{
  width: 50px;
  height: 300px;

}
.img223{
  margin-left: -50px;
  margin-top: 300px;
  height: 300px;

}
.tabk{
  height: 700px;
  width: 1500px;
  background-color: red;
}
.borl{

  height: 700px;
  width: 600px;
  border: 1px solid black;

}
.HIJN{
  
  height: 700px;
}

   .slider {
      max-width: 800px;
    }

    /* дополнительные стили для этого примера */
    .slider__items {
      counter-reset: slide;
    }

    .slider__item {
      position: relative;
      counter-increment: slide;
    }

    .slider__item::after {
      content: counter(slide);
      position: absolute;
      top: 10px;
      right: 20px;
      color: #fff;
      font-style: italic;
      font-size: 32px;
      font-weight: bold;
    }

    .img-fluid {
      display: inline-block;
      height: auto;
      max-width: 100%;
    }

.Jol{
  height: 800px;
  background-position: right top;
  background-image: url(blmain.png);
  background-repeat: no-repeat;
}
.SSSS{
  margin-top: -70px;
}
#slider_bl .wrapper{
  max-width:60em;
  margin:1em auto;
  position:relative}
#slider_bl input{
  display:none
}
#slider_bl .inner{
  width:500%;
  line-height:0
}
#slider_bl article{
  width:20%;
  float:left;
  position:relative
}
#slider_bl article img{
  width:100%
}
#slider_bl .slider-prev-next-control{
  height:50px;
  position:absolute;
  top:50%;
  width:100%;
  -webkit-transform:translateY(-50%);
  -moz-transform:translateY(-50%);
  -ms-transform:translateY(-50%);
  -o-transform:translateY(-50%);
  transform:translateY(-50%)
}
#slider_bl .slider-prev-next-control label{
  display:none;
  width:40px;
  height:40px;
  border-radius:50%;
  background:#fff;
  opacity:.7
}
#slider_bl .slider-prev-next-control label:hover{
  opacity:1
}
#slider_bl .slider-dot-control{
  position:absolute;
  width:100%;
  bottom:0;
  text-align:center
}
#slider_bl .slider-dot-control label{
  cursor:pointer;
  border-radius:5px;
  display:inline-block;
  width:10px;
  height:10px;
  background:#bbb;
  -webkit-transition:all .3s;
  -moz-transition:all .3s;
  transition:all .3s
}
#slider_bl .slider-dot-control label:hover{
  background:#ccc;
  border-color:#777
}
#slider_bl .info{
  position:absolute;
  font-style:italic;
  line-height:20px;
  opacity:0;
  color:#000;
  text-align:left;
  -webkit-transition:all 1s ease-out .6s;
  -moz-transition:all 1s ease-out .6s;
  transition:all 1s ease-out .6s
}
#slider_bl .info h3{
  color:#fcfff4;
  margin:0 0 5px;
  font-weight:400;
  font-size:1.5em;
  font-style:normal
}
#slider_bl .info.top-left{
  top:30px;
  left:30px
}
#slider_bl .info.top-right{
  top:30px;
  right:30px
}
#slider_bl .info.bottom-left{
  bottom:30px;
  left:30px
}
#slider_bl .info.bottom-right{
  bottom:30px;
  right:30px
}
#slider_bl .slider-wrapper{
  width:100%;
  overflow:hidden;
  border-radius:5px;
  box-shadow:1px 1px 4px #666;
  background:#fff;
  background:#fcfff4;
  -webkit-transform:translateZ(0);
  -moz-transform:translateZ(0);
  -ms-transform:translateZ(0);
  -o-transform:translateZ(0);
  transform:translateZ(0);
  -webkit-transition:all .5s ease-out;
  -moz-transition:all .5s ease-out;
  transition:all .5s ease-out
}
#slider_bl .slider-wrapper .inner{
  -webkit-transform:translateZ(0);
  -moz-transform:translateZ(0);
  -ms-transform:translateZ(0);
  -o-transform:translateZ(0);
  transform:translateZ(0);
  -webkit-transition:all .8s cubic-bezier(.77,0,.175,1);
  -moz-transition:all .8s cubic-bezier(.77,0,.175,1);
  transition:all .8s cubic-bezier(.77,0,.175,1)
}
#slider_bl #slide1:checked~.slider-prev-next-control label:nth-child(2)::after,
#slider_bl #slide1:checked~.slider-prev-next-control label:nth-child(5)::after,
#slider_bl #slide2:checked~.slider-prev-next-control label:nth-child(1)::after,
#slider_bl #slide2:checked~.slider-prev-next-control label:nth-child(3)::after,
#slider_bl #slide3:checked~.slider-prev-next-control label:nth-child(2)::after,
#slider_bl #slide3:checked~.slider-prev-next-control label:nth-child(4)::after,
#slider_bl #slide4:checked~.slider-prev-next-control label:nth-child(3)::after,
#slider_bl #slide4:checked~.slider-prev-next-control label:nth-child(5)::after,
#slider_bl #slide5:checked~.slider-prev-next-control label:nth-child(1)::after,
#slider_bl #slide5:checked~.slider-prev-next-control label:nth-child(4)::after{
  font-family:FontAwesome;
  font-style:normal;
  font-weight:400;
  text-decoration:inherit;
  margin:0;
  line-height:38px;
  font-size:3em;
  display:block;
  color:#777
}
#slider_bl #slide1:checked~.slider-prev-next-control label:nth-child(2)::after,
#slider_bl #slide2:checked~.slider-prev-next-control label:nth-child(3)::after,
#slider_bl #slide3:checked~.slider-prev-next-control label:nth-child(4)::after,
#slider_bl #slide4:checked~.slider-prev-next-control label:nth-child(5)::after,
#slider_bl #slide5:checked~.slider-prev-next-control label:nth-child(1)::after{
  content:"\f105";
  padding-left:15px
}
#slider_bl #slide1:checked~.slider-prev-next-control label:nth-child(2),
#slider_bl #slide2:checked~.slider-prev-next-control label:nth-child(3),
#slider_bl #slide3:checked~.slider-prev-next-control label:nth-child(4),
#slider_bl #slide4:checked~.slider-prev-next-control label:nth-child(5),
#slider_bl #slide5:checked~.slider-prev-next-control label:nth-child(1){
  display:block;
  float:right;
  margin-right:5px
}
#slider_bl #slide1:checked~.slider-prev-next-control label:nth-child(5),
#slider_bl #slide2:checked~.slider-prev-next-control label:nth-child(1),
#slider_bl #slide3:checked~.slider-prev-next-control label:nth-child(2),
#slider_bl #slide4:checked~.slider-prev-next-control label:nth-child(3),
#slider_bl #slide5:checked~.slider-prev-next-control label:nth-child(4){
  display:block;
  float:left;
  margin-left:5px
}
#slider_bl #slide1:checked~.slider-prev-next-control label:nth-child(5)::after,
#slider_bl #slide2:checked~.slider-prev-next-control label:nth-child(1)::after,
#slider_bl #slide3:checked~.slider-prev-next-control label:nth-child(2)::after,
#slider_bl #slide4:checked~.slider-prev-next-control label:nth-child(3)::after,
#slider_bl #slide5:checked~.slider-prev-next-control label:nth-child(4)::after{
  content:"\f104";
  padding-left:8px
}
#slider_bl #slide1:checked~.slider-dot-control label:nth-child(1),
#slider_bl #slide2:checked~.slider-dot-control label:nth-child(2),
#slider_bl #slide3:checked~.slider-dot-control label:nth-child(3),
#slider_bl #slide4:checked~.slider-dot-control label:nth-child(4),
#slider_bl #slide5:checked~.slider-dot-control label:nth-child(5){
  background:#333
}
#slider_bl #slide1:checked~.slider-wrapper article:nth-child(1) .info,
#slider_bl #slide2:checked~.slider-wrapper article:nth-child(2) .info,
#slider_bl #slide3:checked~.slider-wrapper article:nth-child(3) .info,
#slider_bl #slide4:checked~.slider-wrapper article:nth-child(4) .info,
#slider_bl #slide5:checked~.slider-wrapper article:nth-child(5) .info{
  opacity:1
}
#slider_bl #slide1:checked~.slider-wrapper .inner{margin-left:0}
#slider_bl #slide2:checked~.slider-wrapper .inner{margin-left:-100%}
#slider_bl #slide3:checked~.slider-wrapper .inner{margin-left:-200%}
#slider_bl #slide4:checked~.slider-wrapper .inner{margin-left:-300%}
#slider_bl #slide5:checked~.slider-wrapper .inner{margin-left:-400%}
@media only screen and (max-width:850px) and (min-width:450px)
{#slider_bl .slider-wrapper{border-radius:0}}
@media only screen and (max-width:450px)
{#slider_bl .slider-wrapper{border-radius:0}
#slider_bl .slider-wrapper .info{opacity:0}}
@media only screen and (min-width:850px)
{#slider_bl body{padding:0 80px}}
.pikts{
  height: 600px;
  width: 500px;
}
.VXSZ{
  margin-top: 30px;
  margin-left: -50px;
}
.container_slider_css{
  
  border-radius: 5px;
  box-shadow:1px 1px 4px #666;
  margin-top: 15px;
  width:850px;
  height:600px;
  overflow:hidden;
  position:relative
}
.photo_slider_css{
  position:absolute;
  animation:round 16s infinite;
  opacity:0;
  width:100%
}
@keyframes round {
25%{opacity:1}
40%{opacity:0}
}
img:nth-child(1){animation-delay:12s}
img:nth-child(2){animation-delay:8s}
img:nth-child(3){animation-delay:4s}
img:nth-child(4){animation-delay:0}
@media(min-width:0px) and (max-width:320px) {
.container_slider_css{width:80%;height:190px}
}
@media(min-width:321px) and (max-width:480px) {
.container_slider_css{width:80%;height:190px}
}
.YHYH{
  margin-top: 100px;
  height: 500px;
  margin-right: -150px;
}
.YHYH1{
   margin-top: 100px;
  height: 500px;
  margin-left: -150px;
}
.YHYH12{
   margin-top: 100px;
  width: 250px;
  height: 200px;
  margin-left: -150px;
}
.VVVCX{
  margin-top: 220px;
  margin-left: 70px;
}
.LAKA{
  margin-top: 40px;
  font-family: thin;
  color: #0a66b7;
  font-size: 70px;
}

.texttt{
  color: #0a66b7;
  font-size: 45px;
  font-family: cursive;
}
.textttt{
  color: #0a66b7;
  font-size: 35px;
  font-family: cursive;
}
.shar{

  
  margin-top: 50px;
  height: 500px;
  width: 600px;
  border-radius: 25px;
}
.shark{
  box-shadow: 1px;
  
}
.ff{
  width: 500px;
  height: 350px;
}
.sedx{
  margin-left: 10px;
}
.but13{
  border-radius: 15px;
  font-family: cursive;
  color: #0a66b7;
  font-size: 25px;

  margin-left: 550px;

  width: 175px;
  height: 50px;
  background-color: #f0be42;
  box-shadow: 5px ;
}
.but6679{
  border-radius: 15px;
  font-family: cursive;
  color: #0a66b7;
  font-size: 25px;

  margin-left: 800px;
  margin-top: 10px;
  width: 175px;
  height: 50px;
  background-color: #f0be42;
  box-shadow: 5px ;
}
#jojo{
  width: 550px;
  height: 400px;
}
.container_slider_css2{
  
  border-radius: 5px;
  box-shadow:1px 1px 4px #666;
  margin-top: 110px;
  width:550px;
  height:400px;
  overflow:hidden;
  position:relative
}
.photo_slider_css2{
  position:absolute;
  animation:round 16s infinite;
  opacity:0;
  width:100%
}
@keyframes round {
25%{opacity:1}
40%{opacity:0}
}
img:nth-child(1){animation-delay:12s}
img:nth-child(2){animation-delay:8s}
img:nth-child(3){animation-delay:4s}
img:nth-child(4){animation-delay:0}
@media(min-width:0px) and (max-width:320px) {
.container_slider_css2{width:80%;height:190px}
}
@media(min-width:321px) and (max-width:480px) {
.container_slider_css2{width:80%;height:190px}
}
.container_slider_css3{
  
  border-radius: 5px;
  box-shadow:1px 1px 4px #666;
  margin-top: 110px;
  width:550px;
  height:400px;
  overflow:hidden;
  position:relative
}
.photo_slider_css3{
  position:absolute;
  animation:round 16s infinite;
  opacity:0;
  width:100%
}
@keyframes round {
25%{opacity:1}
40%{opacity:0}
}
img:nth-child(1){animation-delay:12s}
img:nth-child(2){animation-delay:8s}
img:nth-child(3){animation-delay:4s}
img:nth-child(4){animation-delay:0}
@media(min-width:0px) and (max-width:320px) {
.container_slider_css3{width:80%;height:190px}
}
@media(min-width:321px) and (max-width:480px) {
.container_slider_css3{width:80%;height:190px}
}
.ff1{
  margin-left: 125px;
  margin-top: 50px;
  width: 375px;
  height: 500px;
}
.ff2{
  margin-left: 125px;
  margin-top: 50px;
  width: 575px;
  height: 500px;
}
.iki{
  margin-top: 100px;

}
</style>



<body>




 








<br>


<h2 align="center" class="main-text">АРТ-СТУДИЯ "ШАР ЛЮБВИ"</h2>


<br><br>


<div class="container " >

	<div class="row " >

		<div class="col-sm-8">
		<ul class="nav list-inline">
		 <li class="nav-item">
    		<a class="nav-link HJK border"  href="#Charaktes" >Композиции</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link HJK border sedx" href="#shat">Шары</a>
    		
        </li>
        <li class="nav-item">
        	<a class="nav-link HJK border sedx" href="#Traid">Товары для праздника</a>
        </li>
        <li class="nav-item">
    		<a class="nav-link HJK border sedx" href="#CONf">Анимация</a>
        </li>

		</div>
		</ul>
		<div class="col-sm-4">
			<ul class="list-inline nav" >
			<li class="nav-item">
				<a  class="nav-link border HJK" href="sign_in.php">Корзина</a>
			</li>
			<li class="min"></li>
			<li class="nav-item">
				<a class="nav-link border HJK" href="sign_up.php">SIGN_UP</a>
			</li>
			</ul>

		</div>

	</div>
</div>
</div>






<br><br>










<div class="container" align="right">
 <img  class = "simple" src="432.png">
</div>



<div class="container SSSS" >
  <div class="row">
    <div class="col-sm-12  Jol">
      <h1  class="zag">Добро пожаловать</h1>
      <h3  class="XCV">Присоединяйтесь к нам!</h3>
      <h3  class="EWQ">Мы дарим чувства,<br> которые летают</h3>
      <form method="post">
      <input type="submit" name="dane" value="SIGN_IN"   class="but66">
      </form>

    </div>
    
    </div>
</div>










<br><br>

<br><br>

<div class="container qsdewadw" >
 <img  class = "simple" src="pin1.png" align="left">
 <img  class = "simple" src="pin1.png" align="right">
</div>







<div class="container KOP" id="Charaktes">
  <h1 align="center" class="komp">Композиции</h1>
  <h4 align="center" class="XCV vbvb">Наш большой ассортимент всевозможных композиций<br>по-настоящему привлечёт ваше внимание и будет актуален в качестве украшения любого праздника.</h4>
</div>



<div class="LOKMM">
 

  
    
  <div class="container">
      <img src="434343.png" align="right" class="YHYH">
  <img src="434343.png" align="left"  class="YHYH1">
    <div class="row">
      <div class="col-sm-4">
          <section id="slider_bl">
  <div class="wrapper">
    <input checked type=radio name="slider" id="slide1" />
    <input type=radio name="slider" id="slide2" />
    <input type=radio name="slider" id="slide3" />
    <input type=radio name="slider" id="slide4" />
    <div class="slider-wrapper">
      <div class=inner>
        <article>
          <div class="info top-left">
            <h3>Слайдер 1</h3></div>
          <img src="j1.jpg" / class="pikts">
        </article>
        <article>
          <div class="info bottom-right">
            <h3>Слайдер 2</h3></div>
          <img src="j2.jpg" / class="pikts">
        </article>
        <article>
          <div class="info bottom-left">
            <h3>Слайдер 3</h3></div>
          <img src="j3.jpg" / class="pikts">
        </article>
        <article>
          <div class="info top-right">
            <h3>Слайдер 4</h3></div>
          <img src="wu.jpg" / class="pikts">
        </article>
      </div>
    </div>
    <div class="slider-prev-next-control">
      <label for=slide1></label>
      <label for=slide2></label>
      <label for=slide3></label>
      <label for=slide4></label>
    </div>
    <div class="slider-dot-control">
      <label for=slide1></label>
      <label for=slide2></label>
      <label for=slide3></label>
      <label for=slide4></label>
    </div>
  </div>
</section>
      </div>

      <div class="col-sm-4">
        <div class="container_slider_css">
            <img class="photo_slider_css" src="w.jpg" alt="">
            <img class="photo_slider_css" src="k.jpg" alt="">
            <img class="photo_slider_css" src="s.jpg" alt="">
            <img class="photo_slider_css" src="x.jpg" alt="">
        </div>
      </div>
      <div class="col-sm-4">
     

      </div>
    </div>
      
  </div>
 <form method="post">
  <input type="submit" name="Traiding" value="Композиции" class="but6679"  >
  </form>
</div>










<br><br ><br id="Traid">
<div class="container" align="right" >
 <img  class = "simple" src="lll.png">
</div>


<br>
<div class="HGF" >
 
  <div class="row">
    <div class="col-sm-3">
  <img src="fc.png" class="NHT_1" data-aos="fade-down">
   <img  class = "simple VVVCX" src="4321.png" >
  </div>

    <div class="col-sm-3 VXSZ">
    <h2 align="center" class="LAKA" id="shat">Шары</h2>

<p class="texttt">Красочные,веселые,<br>позитивные шары заставят глаза искриться от счастья и радости!</p>



</div>

<div class="col-sm-4 ">
<div class="container_slider_css2">
  <img class="photo_slider_css2" src="z1.png" id="jojo">
  <img class="photo_slider_css2" src="z2.png" id="jojo">
  <img class="photo_slider_css2" src="z3.png" id="jojo">
  <img class="photo_slider_css2" src="z4.png" id="jojo">
</div>

</div>

  <div class="col-sm-2 CCCCCC" >
  <img src="Vi.png" class="NHT_2" data-aos="fade-down">
  
<form method="post">
  <input type="submit" name="Traiding" value="Шарики" class="but667"  >
  </form>


  </div>



</div>

</div>


<br><br><br>

<br >
<h1 align="center" class="komp">Товары для праздника</h1>
<br>


<div class="container PG_1 " >
  <div class="row">
    <div class="col-sm-6">

      <h1 align="center" class="TGQ FXB_3">Новичок в криптовалюте?</h1>
      <p align="center" class="NYP FXB_2">Нет проблем. Цифровые активы могут показаться запутанными, но мы здесь, чтобы помочь. Наши руководства по криптографии помогут вам ускорить работу.</p>
      
    </div>
    <div class="col-sm-6">
      <img src="h1.jpg" class="GEC ff">
    </div>
  </div>
</div>



<div class="container PG_3">
  
<div class="row">
  <div class="col-sm-6">
      <img src="ooo.jpg" class="GEC EFI ff1">
    </div>
    <div class="col-sm-6">

      <h1 align="right" class="TGQ FXB_1">Коробка-сюрприз</h1>
      <p align="right" class="NYP FXB_4">Вы только посмотрите, какой замечательный сюрприз ожидал именинника! Сколько счастья и радости можно дарить близким, делая подобные подарочки</p>
      <div class="container" align="right">
 <img  class = "simple" src="432.png">
</div>
    </div>
    
  </div>



</div>

<div class="container PG_5">
  

<div class="row">
  
    <div class="col-sm-5 COP">

      <h1 align="left" class="TGQ YGE_1">Игрушка в шаре</h1>
      <p align="left" class="NYP YGE_2">Мы соединяем наш глобальный чат 24/7/365 с обширной поддержкой, чтобы обеспечить ответы на ваши вопросы и круглосуточное удовлетворение ваших потребностей-независимо от того, кто и где вы находитесь.</p>
      <form method="post">
      <input type="submit" name="KNOPKA" value="КАТАЛОГ" class="but NOA" >
      </form> 
    </div>
    <div class="col-sm-6">
      <video class="iki" width="700" height="400" autoplay="autoplay" loop="loop" controls poster="Gzz.jpg">
        
        <source src="2219506600457.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        
      </video>
    </div>
  </div>


</div>

<div class="container">
 <img  class = "simple" src="bit.png">
</div>


<br>
<br>
<br>

<div class="QIV"><h2 align="center" class="LAKA">Анимация</h2></div>
<br>



<div class="THV" id="CONf"></div>
<div class="QHV">
<div class="container">
  <img src="mat.png" align="right" class="YHYH      simple">
  <img src="mac.png" align="left"  class="YHYH12 simple">
  <div class="row">
      
      <div class="col-sm-6 YFZ RFGT">
       
          <ul >
          <li class="textttt">Две "старушки-веселушки" не скучать Вам и Вашим гостям!
В программу входят всевозможные весёлые конкурсы, беспроигрышная лотерея, викторина и пр.
Виновнику торжества в подарок - фигура из воздушных шаров!
Пишите! Звоните! Заказывайте! Мы всегда рады дарить Вам весёлое настроение!!!</li>
        </ul>
      </div>
      <div class="col-sm-6 YFZ RFGT">
          <div class="container_slider_css3">
            <img class="photo_slider_css3" src="z1.png" id="jojo">
            <img class="photo_slider_css3" src="z2.png" id="jojo">
            <img class="photo_slider_css3" src="z3.png" id="jojo">
            <img class="photo_slider_css3" src="z4.png" id="jojo">
          </div>
      </div>
      <form method="post">
      <input type="submit" name="KNOPKA" value="Анимация" class="but13" >
      </form>
  </div>

</div>
 
</div>
<div class="THV"></div>


<br>
<br>
<br>



<p align="center">© 2017 - 2022 Шар Любви Все права защищены</p>






































































    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jscript.js"></script>	
    <script type="text/javascript" src="scriptt.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>


