<html>
<head>
  <link rel="stylesheet" href="style.css">
  <script>
    function gotologin(){
      window.location.href = "login.php";
    }
    function gotoregist() {
      window.location.href = "frm_regist.php";
    }
  </script>
</head>
<body>
<?php
require'connectdb.php';
$user = mysqli_real_escape_string($dbcon,$_POST['username']);
$pass = mysqli_real_escape_string($dbcon,$_POST['pass']);

$key = 'slwiutpoqifkljgmvdkgl';
$en_pass=hash_hmac('sha256',$pass,$key);


$sql  = "SELECT * FROM tb_login WHERE username=? AND password=?";
$stmt = mysqli_prepare($dbcon,$sql);
mysqli_stmt_bind_param($stmt,"ss",$user,$en_pass);
mysqli_execute($stmt);
$r_user = mysqli_stmt_get_result($stmt);
if($r_user->num_rows ==1){
session_start();
$row_user=mysqli_fetch_array($r_user,MYSQLI_ASSOC);
$_SESSION['login_id']=$row_user['id'];
header("Location: ../main.php");
}else{
echo "<div class="box"><h1 style="font-size:15px;">Invalid username or password</h1><input type="button" value="Login"onClick="gotologin();"><input type="button" value="Regist"onClick="gotoregist();"></box>";
}
?>
</body>
</html>
