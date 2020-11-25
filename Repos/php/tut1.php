<?php
$f_name = "Jasper";
$l_name = "Runco";
$age = 26;
$height = 1.93;
$can_vote = true;
$address = array('street' => '123 Main st',
	'city' => 'Pittsburgh'); $state = NULL;
define('PI', 3.1415);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP Tutorial</title>
	</head>
	<body>
		<p>Name : <?php echo $f_name . ' ' . $l_name; ?> </p>
		<form action="tut1.php" method="get">
			<label>Your State : </label>
			<input type="text" name="state"/><br>
			<label>Number 1 : </label>
			<input type="text" name="num-1"/><br>
			<label>Number 2 : </label>
			<input type="text" name="num-2"/><br>
			<input type="submit" value="Sumbit"/>
		</form>
		<?php
		if(isset($_GET) && array_key_exists('state', $_GET)){
			$state = $_GET['state'];
			if(isset($state) && !empty($state)){
				echo 'You live in ' . $state . '<br>';
				echo "$f_name lives in $state<br>";
			}
			if(count($_GET) >= 3){
				$num_1 = $_GET['num-1'];
				$num_2 = $_GET['num-2'];
				echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>";
				echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
				echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
				echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
				echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";
				echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . "<br>";
				echo "Increment $num_1  = " . ($num_1++) . "<br>";
				/* prints the value THEN increments */
				echo "Decrement $num_1  = " . ($num_1--) . "<br><br><br>";
				/* prints the value THEN decrements */
			}
		}
		?>

		<?php
/* OPERATORS */
			echo "abs(-5) = " . abs(-5) . "<br>";
			echo "ceil(4.45) = " . ceil(4.45) . "<br>";
			echo "floor(4.45) = " . floor(4.45) . "<br>";
			echo "round(4.45) = " . round(4.45) . "<br>";
			echo "max(4,5) = " . max(4,5) . "<br>";
			echo "min(4,5) = " . min(4,5) . "<br>";
			echo "pow(4,2) = " . pow(4,2) . "<br>";
			echo "sqrt(16) = " . sqrt(16) . "<br>";
			echo "exp(1) = " . exp(1) . "<br>";
			echo "log(e) = " . log(exp(1)) . "<br>";
			echo "log10(10) = " . log10(exp(10)) . "<br>";
			echo "PI = " . pi() . "<br>";


			echo "hypot(10,10)" . hypot(10,10) . "<br>";
			echo "deg2rad(90) = " . deg2rad(90) . "<br>";
			echo "rad2deg(1.57) = " . rad2deg(1.57)  . "<br>";
			echo "mt_rand(1,50) = " . mt_rand(1,50) . "<br>";
			/* Faxt random number */
			echo "rand(1,50) = " . rand(1,50) . "<br>";
			echo "Max Random = " . mt_getrandmax() . "<br>";
			echo "is_finite(10) = " . is_finite(10)  . "<br>";
			echo "is_numeric(\"10\") = " . is_numeric("10") . "<br>";
			echo "sin(0) = " . sin(0) . "<br>";
			echo number_format(12345.6789, 2) . "<br><br><br>";
		?>

		<?php
/* CONDITIONALS */
			$num_oranges = 4;
			$num_bananas = 36;
			if(($num_oranges > 25) && ($num_bananas > 30)){
				echo "25% Discount<br>";
			} elseif(($num_oranges > 30) || ($num_bananas > 35)){
				echo "15% Discount<br>";
			} elseif(!(($num_oranges < 5)) || (!($num_bananas > 5))){
				echo "5% Discount<br>";
			} else{
				echo "No Discount<br>";
			}

			$request = "Coke";
			switch($request){
				case "Coke":
					echo "Here is your Coke<br>";
					break;
				case "Pepsi":
					echo "Here is your Pepsi<br>";
					break;
				default:
					echo "Here is your Water<br>";
					break;
			}

			$age = 12;
			switch(true){
				case ($age < 5):
					echo "Stay home <br>";
					break;
				case ($age == 5):
					echo "Go to Kindergarten<br>";
					break;
				case in_array($age, range(6, 17)):
					$grade = $age - 5;
					echo "Go to grade $grade<br>";
					break;
				default:
					echo "Go to college<br>";
					break;
			}

		?>
		<?php
/* Ternary Operator */
			$age = 12;
			$can_vote = ($age >= 18) ? "Can Vote" : "Can't Vote";
			echo "Vote? : $can_vote<br>";

			/* === checks data type as well as value */
			if("10" === 10){
				echo "They are Equal<br>";
			} else{
				echo "They aren't Equal<br>";
			}

			if("10" == 10){
				echo "They are Equal<br>";
			} else{
				echo "They aren't Equal<br>";
			}
		?>


		<?php
/* STRINGS */
			printf("%c %d %.2f %s<br>", 65, 65, 1.234, "string");

			$rand_str = "       Random String      ";
			printf("Length : %d<br>", strlen($rand_str));
			printf("Length : %d<br>", strlen(ltrim($rand_str)));
			printf("Length : %d<br>", strlen(rtrim($rand_str)));
			$rand_str = trim($rand_str);
			printf("Upper : %s<br>", strtoupper($rand_str));
			printf("Lower : %s<br>", strtolower($rand_str));
			printf("1st upper : %s<br>", ucfirst($rand_str));
			printf("1st 6 : %s<br>", substr($rand_str, 0, 6));
			printf("Index : %s<br>", strpos($rand_str, "String"));
			$rand_str = str_replace("String", "Characters", $rand_str);
			printf("Replace : %s<br>", $rand_str);
			printf("A == B: %d<br><br><br>", strcmp("A", "B"));
		?>

		<?php
/* ARRAYS */
			$friends = array('Joy', 'Willow', 'Ivy');
			echo 'Wife : ' . $friends[0] . '<br>';
			$friends[3] = 'Steve';
			foreach($friends as $f){
				printf("Friend : %s<br>", $f);
			}
			$me_info = array('Name' => 'Derek', 'Street'=> '123 Main');
			foreach($me_info as $k => $v){
				printf("%s : %s<br>", $k, $v);
			}

			echo '<br><br>';

			$friends2 = array('Doug');
			$friends = $friends + $friends2;
			sort($friends);
			rsort($friends);
			asort($me_info);
			ksort($me_info);
			arsort($me_info);
			krsort($me_info);
			$customers = array(array('Derek', '123 Main'), array('Sally', '122 Main'));

			for($row = 0; $row < 2; $row++){
				for($col = 0; $col < 2; $col++){
					echo $customers[$row][$col] . ', ';
				} echo '<br>';
			}

			$let_str = "A B C D";
			$let_arr = explode(' ', $let_str);
			foreach($let_arr as $l){
				printf("Letter : %s<br>", $l);
			}
			$let_str_2 = implode(' ', $let_arr);
			echo "String : $let_str_2<br>";
			printf("Key Exists : %d<br>", array_key_exists('Name', $me_info));
			printf("In Array : %d<br>", in_array('Joy', $friends));
			echo '<br><br>';
		?>

		<?php
/* LOOPS */
			$i = 0;
			while($i < 10){
				echo ++$i . ', ';
			}
			echo '<br>';

			for($i = 0; $i < 10; $i++){
				if(($i % 2) == 0){
					continue;
				}
				if($i == 7) break;
				echo $i . ', ';
			}
				echo '<br>';

			$i = 0;
			do{
				echo "Do While : $i<br>";
			} while ($i > 0);
		?>

		<?php
/* FUNCTIONS */
			function addNumbers($num_1=0, $num_2=0){
				return $num_1 + $num_2;
			}
			printf("5 + 4 = %d<br>", addNumbers(5,4));

			/* This function passes by value */
			function changeMe($change){
				$change = 10;
			}
			$change = 5;
			changeMe($change);
			echo "Change : $change<br>";

			/* This function passes by reference */
			function changeMe2(&$change){
				$change = 10;
			}
			$change = 5;
			changeMe2($change);
			echo "Change : $change<br><br>";
		?>

		<?php
/* RECIEVE VARIABLE NUMBER OF PERAMETERS */
			function getSum(...$nums){
				$sum = 0;
				foreach($nums as $num){
					$sum += $num;
				}
				return $sum;
			}
			printf("Sum = %d<br><br>", getSum(1,2,3,4));

/* RETURN VARIABLE NUMBER OF VALUES */
			function doMath($x, $y){
				return array(
					$x + $y,
					$x - $y
				);
			}
			list($sum, $difference) = doMath(5,4);
			echo "Sum = $sum<br>";
			echo "Difference = $difference<br><br>";
		?>

		<?php
	/* APPLY FUNCTION TO EVERY VALUE IN LIST */

			function double($x){
				return $x * $x;
			}
			$list = [1,2,3,4];
			$dbl_list = array_map('double', $list);
			print_r($dbl_list);
			echo "<br>";


			function mult($x, $y){
				$x *= $y;
				return $x;
			}
			$list = [1,2,3,4];
			$prod = array_reduce($list, 'mult', 1);
			print_r($prod);
			echo "<br>";


			function isEven($x){
				return ($x % 2) == 0;
			}
			$list = [1,2,3,4];
			$even_list = array_filter($list, 'isEven');

			print_r($even_list);
			echo "<br>";
		?>

		<?php
/* DATES */
/* nime zone info: php.net/manuel/en/timezones.php */

			date_default_timezone_set('America/New_York');
			echo "Date : " . date('I F m-d-Y g:i:s A') . "<br>";
			$import_date = mktime(0, 0, 0, 12, 21, 1974);
			echo "Important Date : " . date('I F m-d-Y g:i:s A',
				$import_date) . "<br>";

			echo "<br>";
		?>

		<?php
/* INCLUDE OTHER FILES IN PHP CODE */

			include 'sayhello.php';

			echo "<br>";
		?>
		<?php
/* EXCEPTION HANDLING */
			function badDivide($num){
				if($num == 0){
					throw new Exception("You can't divide by zero");
				}
				return $calc = 100 / $num;
			}
			try{
				badDivide(0);
			} catch(Exception $e){
				echo "Exception : " . $e->getMessage();
			}

			echo "<br>";
		?>
	</body>
</html>
