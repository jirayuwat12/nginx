<?php
	require 'start.php';
?>
<html>
	<head>
		<title>MAIN</title>
		<meta charset="utf-8">
		<link href="st1.css" rel="stylesheet" >
	</head>
	<body>
		<div>
			<h1> <?php echo "Hello, Mr. ".$row_user['username']; ?> </h1>
			<br></br>
			<input type="button">
			<a href="login/logout.php">Log Out</a>
		</div>
	</body>
</html>

<?php mysqli_close($dbcon); ?>
