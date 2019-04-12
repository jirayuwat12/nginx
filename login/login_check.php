<html>
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
echo "Invalid Usernam or Password";
}
?>
<br></br>
<a href="login.php" >Login Again</a>
<br></br>
<a href="frm_register.php">Sign Up</a>

</body>
</html>
