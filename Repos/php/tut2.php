<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP Tutorial 2</title>
	</head>
	<body>

		<form action="tut2.php" method="post">
			<label>Email : </label>
			<input type="text" name="email"/><br>
			<label>Number 1 : </label>
			<input type="text" name="num1"/><br>
			<label>Number 2 : </label>
			<input type="text" name="num2"/><br>
			<label>Website : </label>
			<input type="text" name="website"/><br>
			<input type="submit" value="Sumbit"/>
		</form>
<!--VERY IMPORTNT TO SANITIZE THE DATA COMING IN-->
<?php
/* INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, OR INPUT_ENV */
if(isset($_POST["email"])){
	if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
		echo "Email isn't valid<br>";
	} else {
		echo "Email is valid<br>";
	}
}
/* VERIFY IF NUMBERS ARE ACTUALLY NUMBERS */





if(isset($_POST["num1"]) && !empty($_POST["num2"])){
	$num1 = filter_input(INPUT_POST, 'num1',
		FILTER_SANITIZE_NUMBER_FLOAT,
		FILTER_FLAG_ALLOW_FRACTION);
	$num2 = filter_input(INPUT_POST, 'num2',
		FILTER_SANITIZE_NUMBER_FLOAT,
		FILTER_FLAG_ALLOW_FRACTION);
	$output = sprintf("%.1f + %.1f = %.1f", $num1, $num2,
		($num1 + $num2));
	echo htmlspecialchars($output) . '<br>';

	/* HOW TO VALIDATE A URL */
	if(isset($_POST["website"])){
		$website = filter_input(INPUT_POST, 'website',
		FILTER_VALIDATE_URL);
	echo 'Website : ' . htmlspecialchars($output) . '<br>';
	}
}
/* Other Validations: */
/* 	php.net/manuel/en/filter.filters.validate.php */
/* Sanitization Filters: */
/* 	php.net/manuel/en/filter.filters.sanitize.php */


/* how html works, (stripping tags) */
$con_html = '<a href="#">Sample</a>';
echo $con_html . '<br>';
echo htmlspecialchars($con_html) . '<br>';
echo strip_tags($con_html, '<a>') . '<br>';
$con_html = strip_tags($con_html) . '<br>';
echo $con_html . '<br>';

?>

	</body>
</html>
