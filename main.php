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
      #menu{
        width:10vw;
        height:100vh;
        border: 1px solid blue;
      }
      #head{
        width:98vw;
        height:16vh;
        border:1px solid blue;
      }
      #main{
        width:67vw;
        height:74vh;
        border:1px solid blue;
      }
      #right{
        width:19vw;
        height:74vh;
        border:1px solid blue;
      }
      #foot{
        width:87vw;
        height:24vh;
        border:1px solid blue;
      }
		</style>
		<link href="st1.css" rel="stylesheet">
	</head>
	<body>
		<div class="grid-container">
		  <div class="item1" id="head"><br>Main Control</div>
		  <div class="item2" id="menu">Menu</div>
		  <div class="item3" id="main">Main</div>
		  <div class="item4" id="right">Right</div>
		  <div class="item5" id="foot">Footer</div>
		</div>
	</body>
</html>


<?php mysqli_close($dbcon); ?>
