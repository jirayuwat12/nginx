<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="style_login.css" rel="stylesheet">
  </head>
  <body>
    <div>
      <h1>Login</h1>
      <form action="login_check.php" method="post">
        <input type="text" name="username" placeholder="username"required>
        <input type="password" name="pass" placeholder="password"required>
        <br></br>
        <input type="submit" value="Login">
        <br></br>
      </form>
      <form class="" action="frm_register.php" method="post">
        <input type="submit" value="Register">
      </form>
    </div>
  </body>
</html>
