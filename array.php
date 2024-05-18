<?php
$fruits = [1, 2, 3, 4, 5];
//  print_r($fruits)

$fruits[0] = "hijau";
$fruits[1] = "merah";
print_r($fruits);
echo "<br/>";

// menghitung total data di array
echo count($fruits);
echo "<br/>";

// menambahkan data di akhir array
array_push($fruits, "mangga", "apel");
print_r($fruits);
echo "<br/>";

// cek data di array ada atau ngga
var_dump(in_array("Hijau", $fruits));
echo "<br/>";

$last = array_pop($fruits);
print_r($fruits);
echo "<br/>";
echo $last;

// unset($fruits);
echo "<br/>";
print_r($fruits);
echo "<br/>";