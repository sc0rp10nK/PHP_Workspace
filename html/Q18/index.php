<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>可変関数</title>
    <style type="text/css">
    </style>
</head>
<?php
//計算に使う数字
$data = [[10, 4], [9, 2], [12, 5]];
//表示用演算子
$symbol = ['', '+', '-', '*', '/'];
?>

<body>
    <?php
        require_once "function.php";
        foreach($data as $value){
            print "<p>▶n1 : {$value[0]}, n2 : {$value[1]}</p>";
            for($i = 1; $i < 5; $i++){
                $calcKansu = "calc{$i}";
                $ans = $calcKansu($value[0],$value[1]);
                print "<p>{$value[0]} {$symbol[$i]} {$value[1]} = $ans </p>";
            }
        }
    ?>
</body>

</html>