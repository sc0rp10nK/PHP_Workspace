<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>匿名関数</title>
    <style type="text/css">
    </style>
</head>

<body>
    <?php
    //計算処理関数を呼び出し（匿名関数）
    calcProc(10, 20, function (int $a, int $b): int {
        return $a + $b;
    }, function (int $total) {
        print "合計は{$total}です";
    });
    //計算処理関数
    function calcProc(int $a, int $b, callable $func, callable $func2)
    {
        //関数１（足し算関数）を呼び出し
        $total = $func($a, $b);
        //関数２（メッセージ表示関数）を呼び出し
        $func2($total);
    }
    ?>
</body>

</html>