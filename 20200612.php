<?php

$input = trim(fgets(STDIN));
$num = substr($input, -5, -2);
echo $num;

if($num == 3 ){
    echo "bon";
} elseif($num == 0 || $num == 1 || $num == 6 || $num == 8){
    echo "pon";
}else{
    echo "hon";
}

?>
