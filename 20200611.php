<?php
$count = trim(fgets(STDIN));
$input = trim(fgets(STDIN));
$array = explode(' ', $input);

$num = 1;
$max = 10 ** 18;

for($i = 0; $i < $count; $i++){
    if ($array[$i] == 0) {
        $num = 0;
        break;
    }
    $num *= $array[$i];
}

if ($num > $max){
    $num = -1;
}

echo $num;

?>
