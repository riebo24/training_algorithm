<?php
//https://atcoder.jp/contests/abc169/tasks/abc169_c
//これがNGになる理由が不明(解説動画によると　誤差がでるっぽい)

//$input = trim(fgets(STDIN));
//$array = explode(' ', $input);
//
//$num = $array[0] * $array[1];
//echo floor($num);

$input = trim(fgets(STDIN));
list($n, $m) = explode(' ', $input);

$m = str_replace(".", "", $m);
echo intdiv($n*$m, 100);


?>
