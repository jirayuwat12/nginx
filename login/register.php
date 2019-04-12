<?php
require 'connectdb.php';
$user=$_POST['username'];
$pass=$_POST['pass'];
$email=$_POST['email'];
//encrypt pass
$key = 'slwiutpoqifkljgmvdkgl';
$en_pass=hash_hmac('sha256',$pass,$key);
$query="INSERT INTO tb_login (username,password,email) VALUES ('$user','$en_pass','$email')";
$result = mysqli_query($dbcon,$query);
if($result){
	header("Location: index.php");
}else{
	echo "Register Error :".mysqli_error($dbcon);
}
mysqli_close($dbcon);
