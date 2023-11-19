<?php 
session_start();
$_SESSION['players'] = '';
?><!doctype unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/index1.css"/>
</head>
<body>
   
<div class="headingDiv">
	<marquee behavior="scroll" direction="right">DICE ROLL </marquee>
</div>
<div class="headingDiv2">
	<div class="links">
		<a href="http://www.twitter.com" target="_blank">
		<img class="headingDiv2IMG" alt="T" src="images/t.png"/>
		</a>
		
		<a href="http://www.facebook.com" target="_blank">
		<img class="headingDiv2IMG" alt="T" src="images/f.png"/>
		</a>
		
		<a href="http://www.youtube.com" target="_blank">
		<img class="headingDiv2IMG" alt="T" src="images/y.png"/>
		</a>
		
		<a href="http://www.pinterest.com" target="_blank">
		<img class="headingDiv2IMG" alt="T" src="images/p.png"/>
		</a>
	</div>
	<div class="got">
		<img class="gotimg" alt="got" src="images/title.jpeg"/>
	</div>
</div>
</div>
<div class="menu">
	<!--<img class="imgB1" src="images/dice.png" />-->
	<ul>  
	 
	  <li class="li1"><a class = "a1" class="active" href="index.php">HOMEPAGE</a></li>
	  <li class="li2"><a class = "a2" href="summary.php">SUMMARY</a></li>	
	  <li class="li3"><a class = "a5" href="contact.php">CONTACTPAGE</a></li>
	  <li class="li4"><a class = "a5" href="login.php">LOGINPAGE</a></li>
	</ul>
</div>
    
<div class="mainBodyDiv">
	<!--<div class="mainContentDiv">
		<img class="homePage" alt="home" src="images/dice_rolling.jpg"/>
	</div>-->
	<div class="dicegif">
		<img class="gif" src="images/dice23.gif">
	</div>
	<div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="images/final_dice.jpeg">
            </div>
            <div class="flip-card-back">
                            
            <p>DICE ROLL  involves pure luck. 
It is played between two players on a gameboard having numbered,
gridded squares. A number of random “danger zones” and "green zones" are pictured on
the board, each connecting two specific board squares. The objective of
the game is to navigate from the start (bottom square) to the finish (top
square) with the help of die rolls and the resulted number helps or hinder
by crossing the Danger zones, of one’s game piece.</p>
            <h2>LOGIN AND PLAY NOW!</h2>
            </div>
        </div>
    </div>
	<div class="dicegif">
		<img class="gif2" src="images/dice23.gif">
	</div>
</div>
<footer>
	<div class="footerDiv">
		<marquee behavior="scroll" direction="right">Made by Rani Chowdary, Sai Roopesh, Bharadwaj</marquee>
	</div>
</footer>
</body>
</html>
<?php
?>