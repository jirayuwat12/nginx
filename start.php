<?php
  session_start();
  if(!isset($_SESSION['login_id'])){
    header("Location: login/index.php");
  }
  require 'login/connectdb.php';
  $user_id = $_SESSION['login_id'];
  $qry_use = "SELECT * FROM tb_login WHERE id='$user_id'";
  $result_user = mysqli_query($dbcon,$qry_use);
  if($result_user){
  	$row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
  }
?>
