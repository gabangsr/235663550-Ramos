<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Interactive Activities</title>
<style>
    body {
        font-family: "Poppins", "Segoe UI", sans-serif;
        background: #e9f0f2;
        color: #222;
        margin: 0;
        padding: 30px 0;
    }

    .activity {
        background: #ffffff;
        max-width: 700px;
        margin: 25px auto;
        padding: 25px;
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    h2 {
        color: #005f9e;
        margin-bottom: 15px;
        border-bottom: 2px solid #005f9e;
        padding-bottom: 5px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 10px;
    }

    label {
        font-weight: 500;
        flex: 1;
        text-align: right;
    }

    .input-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .input-group input[type=text],
    .input-group input[type=number] {
        flex: 2;
        padding: 8px;
        border: 1px solid #bbb;
        border-radius: 6px;
        font-size: 14px;
    }

    input[type=submit] {
        width: fit-content;
        align-self: flex-end;
        background: #005f9e;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
        margin-top: 10px;
    }

    input[type=submit]:hover {
        background: #004b7b;
    }

    .result {
        background: #f3faff;
        padding: 10px;
        border-left: 4px solid #0078d4;
        margin-top: 12px;
        border-radius: 4px;
    }
</style>
</head>
<body>

<!-- ACTIVITY 1 -->
<div class="activity">
<h2>#1 Personal Information</h2>
<form method="POST">
    <div class="input-group"><label>Name:</label><input type="text" name="name"></div>
    <div class="input-group"><label>Age:</label><input type="text" name="age"></div>
    <div class="input-group"><label>Favorite Color:</label><input type="text" name="color"></div>
    <div class="input-group"><label>Email:</label><input type="text" name="email"></div>
    <input type="submit" value="Submit" name="activity1">
</form>
<?php
if (isset($_POST['activity1'])) {
    echo "<div class='result'>";
    echo "Your name is {$_POST['name']},<br>
          You are {$_POST['age']} years old,<br>
          Your favourite color is {$_POST['color']},<br>
          and your email is {$_POST['email']}.";
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 2 -->
<div class="activity">
<h2>#2 Basic Math Operations</h2>
<form method="POST">
    <div class="input-group"><label>Integer 1:</label><input type="text" name="x"></div>
    <div class="input-group"><label>Integer 2:</label><input type="text" name="y"></div>
    <input type="submit" value="Submit" name="activity2">
</form>
<?php
if (isset($_POST['activity2'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    echo "<div class='result'>";
    if (is_numeric($x) && is_numeric($y)) {
        echo "Sum: " . ($x + $y) . "<br>
              Difference: " . ($x - $y) . "<br>
              Product: " . ($x * $y) . "<br>
              Quotient: " . ($y != 0 ? $x / $y : "Undefined (division by zero)");
    } else {
        echo "Please enter valid numbers.";
    }
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 3 -->
<div class="activity">
<h2>#3 Rectangle Area and Perimeter</h2>
<form method="POST">
    <div class="input-group"><label>Length (m):</label><input type="text" name="length"></div>
    <div class="input-group"><label>Width (m):</label><input type="text" name="width"></div>
    <input type="submit" value="Submit" name="activity3">
</form>
<?php
if (isset($_POST['activity3'])) {
    $l = $_POST['length'];
    $w = $_POST['width'];
    echo "<div class='result'>";
    if (is_numeric($l) && is_numeric($w)) {
        echo "Area: " . ($l * $w) . " m²<br>";
        echo "Perimeter: " . (2 * ($l + $w)) . " m";
    } else {
        echo "Invalid input.";
    }
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 4 -->
<div class="activity">
<h2>#4 Temperature Conversion</h2>
<form method="POST">
    <div class="input-group"><label>Celsius:</label><input type="text" name="celsius"></div>
    <input type="submit" value="Submit" name="activity4">
</form>
<?php
if (isset($_POST['activity4'])) {
    $c = $_POST['celsius'];
    echo "<div class='result'>";
    if (is_numeric($c)) {
        echo "$c °C = " . (($c * 1.8) + 32) . " °F";
    } else {
        echo "Please enter a number.";
    }
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 5 -->
<div class="activity">
<h2>#5 Flavor Swap</h2>
<form method="POST">
    <div class="input-group"><label>Flavor 1:</label><input type="text" name="flavor1"></div>
    <div class="input-group"><label>Flavor 2:</label><input type="text" name="flavor2"></div>
    <input type="submit" value="Submit" name="activity5">
</form>
<?php
if (isset($_POST['activity5'])) {
    $f1 = $_POST['flavor1'];
    $f2 = $_POST['flavor2'];
    echo "<div class='result'>";
    echo "$f1 is good, but I like $f2 better.<br>";
    $temp = $f1; $f1 = $f2; $f2 = $temp;
    echo "$f1 is good, but I like $f2 better.";
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 6 -->
<div class="activity">
<h2>#6 Net Salary</h2>
<form method="POST">
    <div class="input-group"><label>Basic Salary:</label><input type="text" name="basic"></div>
    <div class="input-group"><label>Allowance:</label><input type="text" name="allowance"></div>
    <div class="input-group"><label>Deduction:</label><input type="text" name="deduction"></div>
    <input type="submit" value="Submit" name="activity6">
</form>
<?php
if (isset($_POST['activity6'])) {
    $b = $_POST['basic'];
    $a = $_POST['allowance'];
    $d = $_POST['deduction'];
    echo "<div class='result'>";
    if (is_numeric($b) && is_numeric($a) && is_numeric($d)) {
        echo "Net Salary: ₱" . (($b + $a) - $d);
    } else {
        echo "Invalid input.";
    }
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 7 -->
<div class="activity">
<h2>#7 BMI Calculator</h2>
<form method="POST">
    <div class="input-group"><label>Weight (kg):</label><input type="text" name="weight"></div>
    <div class="input-group"><label>Height (m):</label><input type="text" name="height"></div>
    <input type="submit" value="Submit" name="activity7">
</form>
<?php
if (isset($_POST['activity7'])) {
    $w = $_POST['weight'];
    $h = $_POST['height'];
    echo "<div class='result'>";
    if (is_numeric($w) && is_numeric($h) && $h > 0) {
        echo "Your BMI is " . round($w / ($h * $h), 2);
    } else {
        echo "Invalid input.";
    }
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 8 -->
<div class="activity">
<h2>#8 Sentence Info</h2>
<form method="POST">
    <div class="input-group"><label>Sentence:</label><input type="text" name="sentence" size="50"></div>
    <input type="submit" value="Submit" name="activity8">
</form>
<?php
if (isset($_POST['activity8'])) {
    $s = $_POST['sentence'];
    echo "<div class='result'>";
    echo "Characters: " . strlen($s) . "<br>";
    echo "Words: " . str_word_count($s);
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 9 -->
<div class="activity">
<h2>#9 Bank Transaction</h2>
<form method="POST">
    <div class="input-group"><label>Balance:</label><input type="text" name="balance"></div>
    <div class="input-group"><label>Deposit:</label><input type="text" name="deposit"></div>
    <div class="input-group"><label>Withdraw:</label><input type="text" name="withdraw"></div>
    <input type="submit" value="Submit" name="activity9">
</form>
<?php
if (isset($_POST['activity9'])) {
    $bal = $_POST['balance'];
    $dep = $_POST['deposit'];
    $with = $_POST['withdraw'];
    echo "<div class='result'>";
    if (is_numeric($bal) && is_numeric($dep) && is_numeric($with)) {
        echo "Remaining Balance: ₱" . (($bal + $dep) - $with);
    } else {
        echo "Invalid input.";
    }
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 10 -->
<div class="activity">
<h2>#10 Grade Evaluation</h2>
<form method="POST">
    <div class="input-group"><label>Math:</label><input type="text" name="math"></div>
    <div class="input-group"><label>English:</label><input type="text" name="english"></div>
    <div class="input-group"><label>Science:</label><input type="text" name="science"></div>
    <input type="submit" value="Submit" name="activity10">
</form>
<?php
if (isset($_POST['activity10'])) {
    $m = $_POST['math'];
    $e = $_POST['english'];
    $s = $_POST['science'];
    echo "<div class='result'>";
    if (is_numeric($m) && is_numeric($e) && is_numeric($s)) {
        $avg = ($m + $e + $s) / 3;
        function grade($n) {
            if ($n >= 90) return "A";
            elseif ($n >= 80) return "B";
            else return "C";
        }
        echo "Math: " . grade($m) . "<br>English: " . grade($e) . "<br>Science: " . grade($s) . "<br>Average: " . round($avg,2) . " (" . grade($avg) . ")";
    } else {
        echo "Please enter valid grades.";
    }
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 11 -->
<div class="activity">
<h2>#11 Currency Converter</h2>
<form method="POST">
    <div class="input-group"><label>Amount in PHP:</label><input type="text" name="php"></div>
    <input type="submit" value="Submit" name="activity11">
</form>
<?php
if (isset($_POST['activity11'])) {
    $p = $_POST['php'];
    echo "<div class='result'>";
    if (is_numeric($p)) {
        echo "USD: " . ($p * 0.017) . "<br>EUR: " . ($p * 0.015) . "<br>JPY: " . ($p * 2.63);
    } else {
        echo "Invalid input.";
    }
    echo "</div>";
}
?>
</div>

<!-- ACTIVITY 12 -->
<div class="activity">
<h2>#12 Travel Cost Estimator</h2>
<form method="POST">
    <div class="input-group"><label>Distance (km):</label><input type="text" name="distance"></div>
    <div class="input-group"><label>Fuel Efficiency (km/L):</label><input type="text" name="fuel"></div>
    <div class="input-group"><label>Fuel Price (₱/L):</label><input type="text" name="price"></div>
    <input type="submit" value="Submit" name="activity12">
</form>
<?php
if (isset($_POST['activity12'])) {
    $d = $_POST['distance'];
    $f = $_POST['fuel'];
    $p = $_POST['price'];
    echo "<div class='result'>";
    if (is_numeric($d) && is_numeric($f) && is_numeric($p) && $f > 0) {
        $need = $d / $f;
        $cost = $need * $p;
        echo "Fuel Needed: " . round($need,2) . " L<br>Estimated Cost: ₱" . round($cost,2);
    } else {
        echo "Invalid input.";
    }
    echo "</div>";
}
?>
<script>
window.addEventListener("beforeunload", () => {
  localStorage.setItem("scrollpos", window.scrollY);
});
window.addEventListener("load", () => {
  const scrollpos = localStorage.getItem("scrollpos");
  if (scrollpos) window.scrollTo(0, scrollpos);
});
</script>


</div>

</body>
</html>
