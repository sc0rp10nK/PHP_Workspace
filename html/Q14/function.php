<?php
function printRow(string $name, int $num,int $price,int $tax){
    $payment = ($price * $num) * ( 1 + (1 / $tax));
    static $sum = 0;
    $sum += $payment;
    print "<tr>";
    print "<td>{$name}</td><td>{$num}</td><td>{$price}</td><td>{$payment}</td><td>{$sum}</td>";
    print "</tr>";
}
?>