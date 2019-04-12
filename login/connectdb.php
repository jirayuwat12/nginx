<?php

$dbcon = mysqli_connect('localhost','pi','root','logindb');

if(mysqli_connect_errno()){
	echo "Connection Error :".mysqli_connect_error();
}
mysqli_set_charset($dbcon,'utf8');

