<?php 


// echo password_hash('12345678', PASSWORD_DEFAULT);

/**
 * 
 */

// function change_key($array, $old_key, $new_key) {
// 	$keys = array_keys($array);
// 	$keys[array_search($old_key, $keys)] = $new_key;
// 	return array_combine($keys, $array);
// }

// $cars = ["name" => "Ford", "price" =>2000];

// print_r($cars);
 $pass = password_hash(1983, PASSWORD_DEFAULT);
echo $pass;
	


?>



<!DOCTYPE html>
<html>
<head>
	<title>my blog</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<select name="brand">
			<option selected disabled>----select brand---</option>
			<option value="ford">Ford</option>
			<option value="audi">Audi</option>
		</select>
		<input type="text" name="color">
		<input type="file" name="ab[]" multiple>
		<button name="submit">Submit</button>

		<div style="background: green; color: #fff;"> <?php if (isset($car)) {
			echo $car;
		}; ?></div>

	</form>

	
</body>
</html>