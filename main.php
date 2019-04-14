<?php
	require 'start.php';
?>
<html>
	<head>
		<style>
			.item1 { grid-area: header; }
			.item2 { grid-area: menu; }
			.item3 { grid-area: main; }
			.item4 { grid-area: right; }
			.item5 { grid-area: footer; }
			.grid-container {
	  		display: grid;
	  		grid-template-areas:
	    	'header header header header header header'
		    'menu main main main right right'
		    'menu footer footer footer footer footer';
			  grid-gap: 10px;
			}
			.grid-container > div {
			  text-align: center;
			  font-size: 30px;
			}
		</style>
		<link href="st1.css" rel="stylesheet">
	</head>
	<body>
		<div class="grid-container">
		  <div class="item1">Main Control</div>
		  <div class="item2">Menu</div>
		  <div class="item3">Main</div>
		  <div class="item4">Right</div>
		  <div class="item5">Footer</div>
		</div>
	</body>
</html>


<?php mysqli_close($dbcon); ?>
