<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>POST</title>
</head>
<body>
    <h2>領収証</h2>
    <?php
    $total = $_POST['num'] * $_POST['price'];
    $tax = $total * 0.1;
    $sum = $total + $tax;
    print "購入商品：{$_POST['name']}</br>";
    print "単　　価：{$_POST['price']}円</br>";
    print "数　　量：{$_POST['num']}個</br>";
    print "小　　計：{$total}円</br>";
    print "消費税額：{$tax}円</br>";
    print "合　　計：{$sum}円</br>";
    ?>
    <br /><a href="index.php">トップページに戻る</a>
</body>
</html>