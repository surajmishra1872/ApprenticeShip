<!DOCTYPE html>
<html>
<head>
	<title>Peremeter</title>
</head>
<body>
	<center>
	<div style="height: 200px;width: 400px;background-color: orange;text-align: center;padding-top:10px;margin-top: 200px;border-radius: 130px;box-shadow: 20px 10px 30px gray;transform: scale(2);">
		<h1>Area Of Circle</h1>
	<form method="post" action="tcode.php" onsubmit="return validate();">
<p>Enter value of R : <input type="text" id="name" name="r1" autofocus></p>

<input type="submit"  value="Submit">
</form>
</div>
</center>
</body>
<script>
	function $(element_id){
		return document.getElementById(element_id);
	}
	function validate(){
		//var input_1 = document.getElementById('name');
		var input_1 = $('name');
		var name = input_1.value;
		if(name==""){
			input_1.style.border="2px solid red";
			return false;
		}
		else{
		input_1.style.border="2px solid green";
			return true;
			}
	}
</script>
</html>