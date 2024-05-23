<?php
// Definiowanie tablicy z danymi
$data = array(2, 4, 6, 8, 10);

// Obliczanie średniej
$sum = array_sum($data);
$count = count($data);
$average = $sum / $count;
echo "Średnia: $average\n";

// Obliczanie wariancji
$variance = 0;
foreach ($data as $value) {
    $variance += pow($value - $average, 2);
}
$variance /= $count;
echo "Wariancja: $variance\n";

// Obliczanie odchylenia standardowego
$standardDeviation = sqrt($variance);
echo "Odchylenie standardowe: $standardDeviation\n";

// Maksymalna wartość
$maxValue = max($data);
echo "Maksymalna wartość: $maxValue\n";

// Minimalna wartość
$minValue = min($data);
echo "Minimalna wartość: $minValue\n";

// Zamiana stopni na radiany
$degrees = 180;
$radians = deg2rad($degrees);
echo "$degrees stopni to $radians radianów\n";

// Zamiana radianów na stopnie
$radians = pi(); // 180 stopni
$degrees = rad2deg($radians);
echo "$radians radianów to $degrees stopni\n";

// Obliczanie n-tej potęgi liczby
$base = 3;
$exponent = 4;
$power = pow($base, $exponent);
echo "$base do potęgi $exponent to $power\n";

// Funkcja zwracająca całkowitą część liczby zmiennoprzecinkowej
$floatingNumber = 3.14;
$integerPart = intval($floatingNumber);
echo "Część całkowita liczby $floatingNumber to $integerPart\n";
?>
