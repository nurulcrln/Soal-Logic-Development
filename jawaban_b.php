<?php
function pattern_count($text, $pattern) {
    $text_length = strlen($text);
    $pattern_length = strlen($pattern);
    $count = 0;

    for ($i = 0; $i <= $text_length - $pattern_length; $i++) {
        if ($text_length - $pattern_length !== $text_length){
            $found = true;
            for ($j = 0; $j < $pattern_length; $j++) {
                if ($text[$i + $j] !== $pattern[$j]) {
                    $found = false;
                    break;
                }
            }
            if ($found) {
                $count++;
            }
        } else {
            $count = 0;
        }
        
    }
    return $count;
}
// contoh 1
$text = "palindrom";
$pattern = "ind";
$result = pattern_count($text, $pattern);
echo "Output Palindrom: " . $result;

//semua contoh
$text_array = ["palindrom", "abrakadabra", "hello", "ababab", "aaaaaa", "hell"];
$pattern_array = ["ind", "ab", "", "aba", "aa", "hello"];
for($i = 0; $i<=5; $i++){
    $result = pattern_count($text_array[$i], $pattern_array[$i]);
    echo "\nOutput ". $text_array[$i] .": " . $result;
}
?>



