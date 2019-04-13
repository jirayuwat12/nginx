<?php
	require 'start.php';
?>
<html>
	<head>
		<title>MAIN</title>
		<meta charset="utf-8">
		<link href="st1.css" rel="stylesheet" >
		<script>
			function Click(){
				document.getElementById('btn1').value = 'clicked';
			}
		</script>
	</head>
	<body>
		<div>
			<h1> <?php echo "Hello, Mr. ".$row_user['username']; ?> </h1>
			<br></br>
			<input type="button" id="btn1" value="click" onclick="Click();" />
			<br></br>
			<a href="login/logout.php">Log Out</a>
		</div>
	</body>
</html>

<?php mysqli_close($dbcon); ?>
