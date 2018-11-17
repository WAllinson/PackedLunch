<!DOCTYPE html>
<html>
<head>
<title>Packed Lunch Form</title>
</head>
<body>
<form action="addlunch.php" method="post">
	Surname:<input type="text" name="surname"><br>
	Collect From:<input type="text" name="location"><br>
	Collection Date:<input type="date">
	Collection Time:<input type="time"><br>
	Sandwich:<select name="sandwich">
		<option value="">...</option>
		<option value="ham">Ham</option>
		<option value="cheese">Cheese</option>
		<option value="tuna">Tuna</option>
		<option value="egg">Egg</option>
		<option value="jam">Jam</option>
	</select><br>
	Juice:<select name="juice">
		<option value="">...</option>
		<option value="apple">Apple</option>
		<option value="orange">Orange</option>
	</select><br>
	Crisps:<select name="crisp">
		<option value="">...</option>
		<option value="salt">Ready Salted</option>
		<option value="vinegar">Salt and Vinegar</option>
		<option value="c+o">Cheese and Onion</option>
	</select><br>
	Biscuit:<select name="biscuit">
		<option value="">...</option>
		<option value="ginger">Ginger</option>
		<option value="digestive">Digestive</option>
		<option value="fly">Shewsbury</option>
	</select><br>
	Chocolate:<select name="chocolate">
		<option value="">...</option>
		<option value="mars">Mars</option>
		<option value="kitkat">KitKat</option>
		<option value="twix">Twix</option>
		<option value="club">Club</option>
	</select><br>
	<input type="submit" value="Order">
</form>
</body>
</html>
<?php
include_once("connection.php");
?>