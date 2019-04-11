<html>
<body>
<h1>Hello</h1>
<?php
$num =$_GET['led'];
echo shell_exec("python ./code/t.py $num");
?>
</body>
</html>
