<!DOCTYPE html>
<html>
<head>
	<title>Peremeter</title>
</head>
<body>
	<center>
	<div style="height: 250px;width: 400px;background-color: aqua;text-align: center;padding-top:15px;margin-top: 200px;border-radius: 140px 0px 150px 0px;box-shadow: 20px 10px 30px skyblue;transform: scale(2);">
		<h1>Perimeter of a triangle</h1>
	<form method="post" action="to.php" onsubmit="return validate();">
<p>Enter value of a : <input type="text" id="a1" name="a1" autofocus></p>
<p>Enter value of b : <input type="text" id="a2" name="a2" ></p>
<p>Enter value of c : <input type="text" id="a3" name="a3" ></p>
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
		var input_1 = $('a1');
		var name = input_1.value;
		var input_2 = $('a2');
		var name2= input_2.value;
		var input_3 = $('a3');
		var name3= input_3.value;

		if(name=="" || name2=="" || name3==""){
			input_1.style.border="2px solid red";
			input_2.style.border="2px solid red";
			input_3.style.border="2px solid red";
			return false;
		}
		else{
		input_1.style.border="2px solid green";
			return true;
			}
	}
</script>
</html>