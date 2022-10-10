<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Example</h1>
<form action="output.php" onsubmit="return validate();">
<input type="text" name="" value="" placeholder="" id="name">
<input type="submit" name="" value="Submit">
</form>
</body>
<script>
	
	function validate() {
		//alert("hello");
		var input_element=document.getElementById('name');
		// alert(input_element);
		var name= input_element.value;
		if(name=="")
		{
			alert('name is required');
			return false;
		}
		return true;
	}
</script>
</html>