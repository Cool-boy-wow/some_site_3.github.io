var canvas = document.getElementById('c1');
var ctx = canvas.getContext('2d');

var x = 0 ;
var timer;
var l = 0;
drawSin();

/*

function drawSin(){
	l = l + 1;
	y = 100+l*Math.sin(x);
	x = x+0.1;
	ctx.fillRect(x,y,3,3);
	timer = setTimeout(drawSin,10);
	

}
*/