<?php
function count_sort($input) {
    $input = preg_replace('/[^a-zA-Z]/', '', $input);
    $input = str_split($input);
    $text_count = [];

    foreach ($input as $text) {
        $text = $text;
        if (array_key_exists($text, $text_count)) {
            $text_count[$text]++;
        } else {
            $text_count[$text] = 1;
        }
    }

    //mengurutkan berdasarkan abjad
    ksort($text_count); 

    $result = [];
    foreach ($text_count as $text => $count) {
        $result[] = $text .  ":$count"; 
    }

    //menggabungkan
    return implode(", ", $result); 
}

$input = "Hello World";
$result = count_sort($input);
echo "Output: " . $result;

?>