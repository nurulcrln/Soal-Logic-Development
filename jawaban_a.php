<?php
$huruf = [];
$angka = [];
$array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

foreach ($array as $item) {
    if (is_string($item)) {
        $huruf[] = $item;
    } elseif (is_int($item)) {
        $angka[] = $item;
    }
}

function sorting($huruf, $func) {
    return strcmp($huruf, $func);
}

usort($huruf, "sorting");
sort($angka);

$array_sorted = array_merge($huruf, $angka);

$result = [];
foreach ($array_sorted as $array ) {
    $result[] = $array; 
}
echo implode(", ", $result); 

?>