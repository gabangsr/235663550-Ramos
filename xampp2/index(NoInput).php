<!DOCTYPE html>
<html>
<body>


<!--Activity 1 -->
<form method="POST">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
Color: <input type="text" name="color"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php

// Activity 1
$name = "Gab";
$age = "20";
$color = "Orange & Blue";

echo "<h2>Hello! My name is $name</h2>
I am $age years old!<br>
and my favourite colors are $color<br><br>";


//Activity 2
$a = 23;
$b = 71;

$ad = $a + $b;
$sb = $a - $b;
$mp = $a * $b;
$dv = $a / $b;

echo "First 2 integers: $a, $b <br>
- Sum: $ad <br>
- Difference: $sb <br>
- Product: $mp<br>
- Quotient: $dv<br><br>";


//Activity 3
$length = 50;
$width = 35;

echo "Given that the length of a rectangel is $length meters 
	and the width is $width meters<br>";

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "The area is $area 
	and the perimeter is $perimeter<br><br>";


//Activity 4
$celsius = 18.6;
$farenheit = ($celsius * 1.8) + 32;

echo "The temperature of Baguio is currently $celsius C, or $farenheit F<br><br>";


//Activity 5
$flavor1 = "Chocolate";
$flavor2 = "Vanilla";
echo "$flavor1 is good, but I like $flavor2 better<br>";

$temp = $flavor1;
$flavor1 = $flavor2;
$flavor2 = $temp;
echo "$flavor1 is good, but I like $flavor2 better<br><br>";


//Activity 6
$basic_salary = 1000;
$allowance = 1000;
$deduction = 500;
$net_salary = ($basic_salary + $allowance) - $deduction;

echo "Given a salary of ₱$basic_salary, <br> 
and an allowance of ₱$allowance, <br>
but somehow have a deduction of ₱$deduction, <br>
your net salary would be $net_salary<br><br>";


//Activity 7
$weight = 67;
$height = 1.6764;
$bmi = $weight / ($height * $height);

echo "If you weighted $weight kg, <br> 
and is $height m tall, <br>
your BMI would be $bmi<br><br>";


//Activity 8
$sentence = "'The Quick Brown Fox Jumps Over The Lazy Dog'";
$wordlength = strlen("$sentence");
$wordcount =  str_word_count("$sentence");

echo "The sentence is as follows: <br>
	$sentence, <br> 
	It has a total of $wordlength characters, <br>
	It has a total of $wordcount words. <br><br>";


//Activity 9
$balance = 10000;
$deposit = 5000;
$withdraw = 500;

echo "Balance: ₱$balance, <br>
	Deposit: ₱$deposit, <br>
	Withdraw: ₱$withdraw.<br>";

$balance += $deposit;
$balance -= $withdraw;

echo "Your remaining balance would be ₱$balance <br><br>";


//Activity 10
echo "These are your grades from the 3rd Trimester of 1st Year: <br>";

$math = 75;
$english = 90;
$science = 87;
$average = ($math + $english + $science) / 3; 

echo "- Math ($math): ";
if ($math >= 90){
	echo "A <br>";
} elseif ($math >= 80) {
	echo "B <br>";
} else {
	echo "C <br>";
}

echo "- English ($english): ";
if ($english >= 90){
	echo "A <br>";
} elseif ($english >= 80) {
	echo "B <br>";
} else {
	echo "C <br>";
}

echo "- Science ($science): ";
if ($science >= 90){
	echo "A <br>";
} elseif ($science >= 80) {
	echo "B <br>";
} else {
	echo "C <br>";
}

echo "- Average ($average): ";
if ($average >= 90){
	echo "A <br>";
} elseif ($average >= 80) {
	echo "B <br>";
} else {
	echo "C <br>";
}

echo "<br>";


//Activity 11
$PHP = 1000;
$USD = $PHP * 0.017;
$EUR = $PHP * 0.015;
$JPY = $PHP * 2.63;


echo "If you had ₱$PHP, you could convert it to: <br>
	- USD: $USD $, <br>
	- EUR: $EUR €, <br>
	- JPY: $JPY ¥, <br><br>";


//Activity 12
$distance = 350;
$fuel_consumption = 14;
$fuel_price = 70;

$fuel_needed = $distance / $fuel_consumption;
$travel_cost = $fuel_needed * $fuel_price;

echo "Travel Cost Estimation: <br>
- Distance: $distance km <br>
- Fuel Efficiency: $fuel_consumption km/L <br>
- Fuel Price: ₱$fuel_price / L <br>
- Fuel Required: ".round($fuel_needed,2). "L<br>
- Estimated Travel Cost: ₱ ".round($travel_cost,2). "<br><br>";


?>
</body>
</html>

