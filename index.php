<!DOCTYPE html>
<html>

<head>

	<title>Festa de Fim de Ano VICOP </title>
	<link rel="stylesheet" type="text/css" href="./css/contador.css">
</head>
<body>

<div id="countdown">
  	<div id='tiles'></div>
	  	<div class="labels">
	    	<li>Dias</li>
		    <li>Horas</li>
		    <li>Minutos</li>
		    <li>Segundos</li>
	  </div>
</div>

<div class="titulo_festa">
	<img src="http://gif-finder.com/wp-content/uploads/2014/10/THECARLTON.gif">
	<p>	GRANDE FESTA DE FINAL DE ANO VICOP!</p>
	<p class="red"> SEXTA-FEIRA 07 de DEZEMBRO de 2018</p>
</div>

<p class="black"> Coloque na sua agenda</p>


<div class="play-music black">
  <div id="music-animation" class="music-animation">
    <span class="bar bar1"></span>
    <span class="bar bar2"></span>
    <span class="bar bar3"></span>
    <span class="bar bar4"></span>
    <span class="bar bar5"></span>
  </div>
  <div class="music-toggle"><a onClick="togglePlay()" id="toggle" data-text-swap="Music on">Music off</a></div>
</div>
<audio id="music" loop="loop" src="https://web.opendrive.com/api/v1/download/file.json/OV84MDUyNTM1NF9aSXB6Sw?inline=1"></audio>



<!-- Contador JS -->
<script src="./js/contador.js"type="text/javascript"></script>

<!-- Player JS -->
<script src="./js/player.js"type="text/javascript"></script>


</body>
</html>