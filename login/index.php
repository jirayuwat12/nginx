<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>index</title>
  </head>
  <script>
    function gotologin(){
      window.location.href = "login.php";
    }
    function gotoregist(){
      window.location.href = "frm_register.php";
    }
  </script>
  <style media="screen">
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: #34495e;
    }
    box {
      width: 300px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #191919;
      text-align: center;
      border-radius: 24px;
    }
    box input[type="button"]{
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 40px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    box input[type="button"]:hover{
      background: #2ecc71;
    }
    box input[type="button"]:active{
      background: #2ab766;
    }
  </style>
  <body>
    <box>
      <input type="button" name="" value="Login" onclick="gotologin();">
      <input type="button" name="" value="Regist" onclick="gotoregist();">
    </box>
  </body>
</html>
