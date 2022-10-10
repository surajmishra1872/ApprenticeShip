<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
</head>
<body><center>
	<div style="height: 300px;width: 400px;background-color: gold;text-align: center;padding-top:10px;margin-top: 200px;border-radius: 0px 100px 0px 100px;box-shadow: 20px 10px 30px gray;transform: scale(2);">
		
	<h1 style="text-decoration: underline black;">Simple Calculator</h1>
	<form method="post" action="code.php" onsubmit="return validate();">
<p>Enter first number: <input type="number" id="g" name="f" autofocus=""> </p>
<p>Enter second number: <input type="number" id="k" name="s" > </p>
<input type="radio" name="bb"  value="add">Add<br>
<input type="radio" name="bb"  value="sub" >Sub<br>
<input type="radio" name="bb"  value="mul" >Mul<br>
<input type="radio" name="bb"  value="div" >Div<br>
<input type="submit" name="" value="Submit">
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
		var input_1 = $('g');
		var name = input_1.value;
		var input_2 = $('k');
		var name2= input_2.value;
		if(name==""){
			input_1.style.border="2px solid red";
			return false;
		}
		else if(name2==""){
			input_2.style.border="2px solid red";
			return false;
		}
		else{
		input_1.style.border="2px solid green";
			return true;
			}
	}
</script>
</html>
