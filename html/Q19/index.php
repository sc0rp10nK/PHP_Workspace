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
    //計算処理関数を呼び出し
    calcProc(10,20);
    //計算処理関数
    function calcProc(int $a,int $b){
        //足し算関数を呼び出し
        $total = getTotal($a,$b);
        //メッセージ表示関数を呼び出し
        printMessage($total);
    }

    //足し算関数
    function getTotal(int $a,int $b): int{
        return $a + $b;
    }
    //メッセージ表示関数
    function printMessage(int $total){
        print "合計は{$total}です";
    }
    ?>
</body>

</html>