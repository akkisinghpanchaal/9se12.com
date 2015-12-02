<!DOCTYPE html>
<html>
<head>
	<title>Select City</title>
	<link rel="stylesheet" type="text/css" href="city_selection.css">
</head>
<body>

<div id = "city_selection">
	
<h1>Please choose the city you are currently in</h1>

	<input type="text" list = "cities" id = 'selected_city'>
	
	<datalist id = 'cities'>
		<option>Mumbai</option>
		<option>Delhi</option>
		<option>Bangalore</option>
		<option>Kolkata</option>
		<option>Jaipur</option>
		<option>Agra</option>
		<option>Chennai</option>
		<option>Pune</option>
		<option>Hyderabad</option>
		<option>Surat</option>
	</datalist>

	<button>Submit</button>
<!--	<select id = 'cities'>
		<option>Mumbai</option>
		<option>Delhi</option>
		<option>Bangalore</option>
		<option>Kolkata</option>
		<option>Jaipur</option>
		<option>Agra</option>
		<option>Chennai</option>
		<option>Pune</option>
		<option>Hyderabad</option>
		<option>Surat</option>
	</select>-->

</div>
</body>
</html>