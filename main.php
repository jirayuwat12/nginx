<?php
	require 'start.php';
?>
<html>
	<head>
		<title>MAIN</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1> <?php echo "Hello, Mr. ".$row_user['username']; ?> </h1>
		<br></br>
		<input type="button">
		<a href="login/logout.php">Log Out</a>
	</body>
</html>

<?php mysqli_close($dbcon); ?>
