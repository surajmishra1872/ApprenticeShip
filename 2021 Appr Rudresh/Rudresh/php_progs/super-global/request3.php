<?php
$id = 111;
echo $id;
echo "  Current page request :: ",$_SERVER['REQUEST_METHOD'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body><center>
	<div>
	<h1>$_REQUEST as  super global variable for put/patch request</h1>
	<form method="post" action="rpost3.php?id=<?php echo $id;?>" onsubmit="return true">
<p>Enter text: <input type="text" id="g" name="name" autofocus=""> </p>
<input type="submit" name="btn" value="Submit">
</form>
</div>
</center>
</body>
</html>
