<?php
function checkSales(array $data,int $base){
    print "<h2>売上金額{$base}超の品目</h2>";
    foreach ($data as $key => $value) {
        if($base < $value['price'] * $value['num']){
            yield $value;
        }
    }
}
?>