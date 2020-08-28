<?php
function getPayment(int $num, int $price, int $tax):int{
    return ($price * $num) * ( 1 + (1 / $tax));
}
function printReceipt(string $name, int $num,int $price,int $payment){
    print "<p>商品名:{$name} 数量:{$num}個 単価:{$price}円 支払い合計:{$payment}円</p>";
}
?>