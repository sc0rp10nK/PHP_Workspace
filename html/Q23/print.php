<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>GET</title>
</head>
<?php
$pizza_price = [
  [480, 630, 580],
  [900, 1200, 1100],
  [1500, 2200, 2000],
  [2700, 3300, 3100],
];
$topping_price = [200, 200, 300, 400];
$p_ary = ['マルゲリータ', 'シーフード', 'てりやきチキン'];
$s_ary = ['SS', 'S', 'M', 'L'];
$c_ary = ['あっさり', '深くコクあり'];
$t_ary = ['オニオン', 'ブロッコリー', 'サラミ', 'エビ'];
$pay = 0;
?>
<body>
    <h2>注文内容</h2>
    <?php
    $sum = 0;
    $pizza_name = $p_ary[$_GET['pizza_name']];
    $pizza_size = $s_ary[$_GET['pizza_size']];
    $pizza_cheese_type = $c_ary[$_GET['pizza_cheese_type']];
    $pizza_option;
    $sum += $pizza_price[$_GET['pizza_size']][$_GET['pizza_name']];
    if ($_GET['pizza_option'] != null) {
      foreach ($_GET['pizza_option'] as $value) {
        $sum += $topping_price[$value];
        $pizza_option .= $t_ary[$value];
        $pizza_option .= "　";
      }
    } else {
      $pizza_option = "ー";
    }
    print "ピザの種類　：{$pizza_name}</br>";
    print "サイズ　　　：{$pizza_size}</br>";
    print "チーズタイプ：{$pizza_cheese_type}</br>";
    print "トッピング　：{$pizza_option}</br>";
    print "料金　　　　：{$sum}円</br>";
    ?>
        <br /><a href="index.php">前のページへ</a>
</body>
</html>