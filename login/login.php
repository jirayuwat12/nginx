<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="style_login.css" rel="stylesheet">
  </head>
  <body>
    <div>
      <form class="box"action="login_check.php" method="post">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pass" placeholder="Password" required>
        <input type="submit" value="Login">
        <form class="" action="frm_register.php" method="post">
          <input type="submit" name="" value="Register">
        </form>
      </form>
    </div>
  </body>
</html>
