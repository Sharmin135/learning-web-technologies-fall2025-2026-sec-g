<!-- Task 1 -->
<?php

$length = 5;
$width  = 2;


$area = $length * $width;
$perimeter = 2 * ($length + $width);


echo "The Length is: $length<br>";
echo "The width is: $width<br>";
echo "Area of Rectangle is: $area<br>";
echo "Perimeter of Rectangle is: $perimeter<br>";
?>
<br> <br>
<!-- Task 2 -->
<?php
$amount = 20000;
$vat_rate = 0.15;  

$vat = $amount * $vat_rate;
$total = $amount + $vat;

echo "Amount= $amount<br>";
echo "VAT (15%)= $vat<br>";
echo "Total Amount (Including VAT)= $total<br>";
?>
<br><br>

<!-- Task 3 -->
<?php

$number = 7;

// Check odd or even using IF-ELSE
if ($number % 2 == 0) {
    echo "$number is Even";
} else {
    echo "$number is Odd";
}
?>
<br><br>
<!-- Task 4 -->
 <?php

$a = 105;
$b = 195;
$c = 23;

if ($a >= $b && $a >= $c) {
    echo "$a is the largest number";
} elseif ($b >= $a && $b >= $c) {
    echo "$b is the largest number";
} else {
    echo "$c is the largest number";
}
?>
<br><br>
<!-- Task 5 -->
 <?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {  
        echo $i . "<br>";
    }
}
?>
<br><br>

<!-- Task 6 -->
<?php

$numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90);


$search = 70;

$found = false;


for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        echo "Element $search found at index $i";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "Element $search not found in the array";
}
?>
<br><br>

<!-- Task 7 -->
<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo "<br>";
}
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$char ";
        $char++;
        }
    }
    ?>
<br><br>
<!-- Task 8 -->
<?php
$array = [
    ['1', '2', '3', 'A'],
    ['1', '2', 'B', 'C'],
    ['1', 'D', 'E', 'F']
];

foreach ($array as $row) {
    foreach ($row as $element) {
        echo "$element ";
    }
    echo "<br>";
}
?>