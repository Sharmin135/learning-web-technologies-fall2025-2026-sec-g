<?php
$amount = 20000;
$vat_rate = 0.15;  

$vat = $amount * $vat_rate;
$total = $amount + $vat;

echo "Amount: $amount<br>";
echo "VAT (15%): $vat<br>";
echo "Total Amount (With VAT): $total<br>";
?>