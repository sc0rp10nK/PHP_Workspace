<?php
$goods = [
  ["NintendoSwitch", 29980],
  ["PlayStation4", 39980],
  ["XboxOneX", 39980],
];

$pay = ["代引き", "銀行振込", "コンビニ払い"];

function get_buy_item($value)
{
  global $goods;
  $item = $goods[$value][0];
  return $item;
}
function get_buy_item_price($value)
{
  global $goods;
  $price = $goods[$value][1];
  return $price;
}
function get_payment_type($value)
{
  global $pay;
  $payment_type = $pay[$value];
  return $payment_type;
}
?>
