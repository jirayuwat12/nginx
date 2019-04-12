<?php
session_start();
if(!isset($_SESSION['login_id'])){
header("Location: login/login.php");
}
require 'login/connectdb.php';
$user_id = $_SESSION['login_id'];
$qry_use = "SELECT * FROM tb_login WHERE id='$user_id'";
$result_user = mysqli_query($dbcon,$qry_use);
if($result_user){
	$row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
}
?>
<html>
<body>
<h1><?php
echo "Hello, Mr. ".$row_user['username'];
?></h1>
<br></br>
<a href="login/logout.php">Log Out</a>
</body>
</html>
<?php
mysqli_close($dbcon);
?>
