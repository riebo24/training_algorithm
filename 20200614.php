<!---->
<!--//    S,Tは英数字文字列-->
<!--//    Sは1文字以上10文字以下-->
<!--//    TはSより1文字多い（Tに１文字足した数字）-->

<?php
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));

$count = strlen($t);
$t1 = substr($t, 0, -1);

if($t1 == $s){
    echo "Yes";
}else{
    echo "No";
}
?>
