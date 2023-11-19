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
	<marquee behavior="scroll" direction="right">DICE ROLL</marquee>
</div>
<div class="headingDiv2">
<img class="imgB1" src="images/dice.png" />
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
<div class="contact">
    <div class="contact1">
        <div style="margin-top:60px">
            <h2>Rani Chowdary Mandepudi</h2>
        
            <p>rmandepudi1@student.gsu.edu</p>
    </div>
    </div>
    <div class="contact1">
        <div style="margin-top:60px; padding-left: 15px">
            <h2>Sai Roopesh Mandava</h2>
        
            <p>Email: smandava1@student.gsu.edu</p>
        </div>
    </div>
    <div class="contact1">
        <div style="margin-top:60px; padding-left: 15px">
            <h2>Bharadwaj B Balaji</h2>
        
            <p>bbalaji1@student.gsu.edu</p>
        </div>
    </div>
</div>


</body>
</html>
<?php
?>