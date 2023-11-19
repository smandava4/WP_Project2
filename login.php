<!DOCTYPE html>
<html>
<head>
  <title>Game of Throws - Login</title>
  <link rel="stylesheet" type="text/css" href="css/loginandregister.css">
</head>
<body>
  <div class="container">
    <div class="left-side"></div>
    <div class="right-side">
      <div class="login-form">
        <h2>Please Login into the Game</h2>
        <?php
          if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
              echo "<p style='color: red;'>Invalid username or password. Please try again.</p>";
          }
        ?>
        <form action="authenticate.php" method="post">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required><br><br>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required><br><br>
          <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
      </div>
    </div>
  </div>
</body>
</html>
