<?php
function checkData(int $sum,int ...$arry):array{
    $avg = 0;
    $sums = 0;
    $tmp_sum = 0;
    foreach($arry as $value){
         $tmp_sum += $value;
        if($value >= $sum){
            $sums++;
        }
    }
    $avg = number_format($tmp_sum / count($arry),2);
    return [max($arry),min($arry),$avg,$sums];
}
