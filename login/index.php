<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript">
      function gotologin(){
        window.location.href = "login.php";
      }
      function gotoregist() {
        window.location.href = "frm_regist.php";
      }
    </script>
  </head>
  <body>
    <div class="box">
      <input class="border" type="button" name="" value="Login" onclick="gotologin();">
      <input class="border" type="button" name="" value="Regist" onclick="gotoregist();">
    </div>
  </body>
</html>
