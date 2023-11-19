<?php 
session_start();
$_SESSION['players'] = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Throws</title>
    <link rel="stylesheet" type="text/css" href="css/index1.css"/>
</head>
<body>
   
<header class="header">
    <div class="logo">
        <img class="logo-img" src="images/dice.jpeg" alt="Game of Throws Logo">
        <h1>Excited to Play - Game of Throws</h1>
    </div>
    <nav class="nav">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="summary.php">Summary</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</header>

<section class="welcome">
    <h2>Summary</h2>
</section>

<section class="main-content">
    <div class="project-details">
        <h3>Project Details</h3>
        <ul>
            <li><strong>Project Title:</strong> Game of Throws</li>
            <li><strong>Project Description:</strong> A simple game played between two players on a gameboard having numbered, gridded squares.</li>
        </ul>
    </div>

    <div class="team-members">
        <h3>Team Members</h3>
        <ul>
            <li>Rani Chowdary Mandepudi</li>
            <li>Sai Roopesh Mandava</li>
            <li>Bharadwaj B Balaji</li>
        </ul>
    </div>

    <div class="responsibilities">
        <h3>Project Responsibilities</h3>
        <div class="member-responsibility">
            <h4>Rani Chowdary Mandepudi</h4>
            <ul>
                <li>Responsible for the idea of the project along with the design of logos</li>
                <li>Created the design layout of the home page.</li>
                <li>Responsible for coding of the summary and contact page</li>
            </ul>
        </div>

        <div class="member-responsibility">
            <h4>Sai Roopesh Mandava</h4>
            <ul>
                <li>Responsible for coding of the game.</li>
                <li>Also responsible for the idea of the game.</li>
            </ul>
        </div>

        <div class="member-responsibility">
            <h4>Bharadwaj B Balaji</h4>
            <ul>
                <li>Responsible for coding of the login and signup page</li>
                <li>Also responsible for the idea of the game.</li>
                <li>Responsible for the ppt</li>
            </ul>
        </div>
    </div>
</section>

<footer class="footer">
    <p>&copy; 2023 Game of Throws. All rights reserved.</p>
</footer>

</body>
</html>
<?php
?>
