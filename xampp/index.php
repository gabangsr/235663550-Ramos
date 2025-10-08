<!DOCTYPE html>
<html>
<body>

<?php
$name = "Gab";
$age = "20";
$color = "Orange & Blue";

echo "<h2>Hello! My name is $name</h2>";
echo "I am $age years old!<br>";
echo "and my favourite colors are $color<br><br>";




$a = 23;
$b = 71;

$ad = $a + $b;
$sb = $a - $b;
$mp = $a * $b;
$dv = $a / $b;

echo "First 2 integers: $a, $b <br>";
echo "Sum:$ad<br>";
echo "Difference:$sb <br>";
echo "Product:$mp<br>";
echo "Quotient:$dv<br><br>";




$length = 50;
$width = 35;

echo "Given that the length of a rectangel is $length meters 
	and the width is $width meters<br>";

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "The area is $area 
	and the perimeter is $perimeter<br><br>";

$celsius = 18.6;
$farenheit = ($celsius * 1.8) + 32;

echo "The temperature of Baguio is currently $celsius C, or $farenheit F<br><br>";



$flavor1 = "Chocolate";
$flavor2 = "Vanilla";
echo "$flavor1 is good, but I like $flavor2 better<br>";

$temp = $flavor1;
$flavor1 = $flavor2;
$flavor2 = $temp;
echo "$flavor1 is good, but I like $flavor2 better<br><br>";





$basic_salary = 1000;
$allowance = 1000;
$deduction = 500;
$net_salary = ($basic_salary + $allowance) - $deduction;

echo "Given you have a salary of $basic_salary.php and an allowance of $allowance.php <br>";
echo "but somehow have a deduction of $deduction.php, your net salary would be $net_salary<br><br>";




$weight = 67;
$height = 1.6764;
$bmi = $weight / ($height * $height);

echo "If you weighted $weight kg, and is $height m tall, your BMI would be $bmi<br><br>";





$sentence = "The Quick Brown Fox Jumps Over The Lazy Dog";
$wordlength = strlen("$sentence");
$wordcount =  str_word_count("$sentence");

echo "The sentence is as follows: <br>
	$sentence, <br> 
	It has a total of $wordlength characters, <br>
	It has a total of $wordcount words. <br><br>";




$balance = 10000;
$deposit = 5000;
$withdraw = 500;

echo "Having a Balance of $balance php, <br>
	You decide to deposit $deposit php, <br>
	but also decide to withdraw $withdraw php. <br>";

$balance += $deposit;
$balance -= $withdraw;

echo "Your remaining balance would be $balance php. <br><br>";




echo "These are your grades from the 3rd Trimester of 1st Year: <br>";

$math = 75;
$english = 90;
$science = 87;
$average = ($math + $english + $science) / 3; 

echo "Math ($math): ";
if ($math >= 90){
	echo "A <br>";
} elseif ($math >= 80) {
	echo "B <br>";
} else {
	echo "C <br>";
}

echo "English ($english): ";
if ($english >= 90){
	echo "A <br>";
} elseif ($english >= 80) {
	echo "B <br>";
} else {
	echo "C <br>";
}

echo "Science ($science): ";
if ($science >= 90){
	echo "A <br>";
} elseif ($science >= 80) {
	echo "B <br>";
} else {
	echo "C <br>";
}

echo "Average ($average): ";
if ($average >= 90){
	echo "A <br>";
} elseif ($average >= 80) {
	echo "B <br>";
} else {
	echo "C <br>";
}




$PHP = 1000;
$USD = $PHP/0.017;
$EUR = $PHP/0.015;
$JPY = $PHP/2.63;


echo "If you had "






?>

</body>
</html>

