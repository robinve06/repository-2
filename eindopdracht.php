<!DOCTYPE html>
<html>
<head>
	<title>BMR Calculator</title>
	<style>
		body {
			background-color: #ADD8E6;
		}
	</style>
</head>
<body>
	<h1>BMR Calculator</h1>
	<div style="float: left; width: 50%;">
		<h2>Left BMR Calculator</h2>
		<form method="post" action="bmr.php">
			<label for="left_gender">Gender:</label>
			<select id="left_gender" name="left_gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			<br>
			<label for="left_age">Age:</label>
			<input type="text" id="left_age" name="left_age">
			<br>
			<label for="left_height">Height (in cm):</label>
			<input type="text" id="left_height" name="left_height">
			<br>
			<label for="left_weight">Weight (in kg):</label>
			<input type="text" id="left_weight" name="left_weight">
			<br>
			<input type="submit" value="Calculate">
		</form>
		<img src="left_image.png" alt="Left Image">
	</div>
	<div style="float: right; width: 50%;">
		<h2>Right BMR Calculator</h2>
		<form method="post" action="bmr.php">
			<label for="right_gender">Gender:</label>
			<select id="right_gender" name="right_gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			<br>
			<label for="right_age">Age:</label>
			<input type="text" id="right_age" name="right_age">
			<br>
			<label for="right_height">Height (in cm):</label>
			<input type="text" id="right_height" name="right_height">
			<br>
			<label for="right_weight">Weight (in kg):</label>
			<input type="text" id="right_weight" name="right_weight">
			<br>
			<input type="submit" value="Calculate">
		</form>
		<img src="LF.jpg" alt="Right Image">
	</div>
</body>
</html>
