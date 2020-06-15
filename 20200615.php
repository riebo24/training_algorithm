<?php

$maxLength = trim(fgets(STDIN));
$input = trim(fgets(STDIN));

//strlen():ある文字列の長さを調べる
$inputLength = strlen($input);

//substr():ある文字から一定文字数以下を切り取る
if ($maxLength < $inputLength) {
    $input = substr($input, 0, $maxLength)."...";
}
echo $input;
