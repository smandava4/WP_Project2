<!DOCTYPE html>
<html>
<head>
    <title>Game of Throws- Register</title>
    <link rel="stylesheet" type="text/css" href="css/loginandregister.css">
</head>
<body>
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <div class="login-form">
                <h1>Game of Throws - Register</h1>
                <?php
                if (isset($_GET['error']) && $_GET['error'] == 'user_exists') {
                    echo "<p style='color: red;'>Username already exists. Please choose another one.</p>";
                }
                ?>
                <form action="create_user.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required><br><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br><br>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
