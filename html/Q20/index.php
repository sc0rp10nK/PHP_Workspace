<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>ジェネレーター</title>
    <style type="text/css">
    </style>
</head>
<?php
//売上データ
$data = [
    //商品名             単価            販売数量
    ['name' => 'りんご', 'price' => 150, 'num' => 8],
    ['name' => 'ブドウ', 'price' => 690, 'num' => 2],
    ['name' => 'キウイ', 'price' => 98, 'num' => 5],
    ['name' => 'すいか', 'price' => 500, 'num' => 2],
    ['name' => 'バナナ', 'price' => 198, 'num' => 6]
];
//基準額
$base = 1000;
?>
<body>
    <?php
        require_once "function.php";
        $i = 1;
        foreach(checkSales($data,$base) as $value){
            print "{$i} : {$value['name']} </br>";
            $i++;
        }
    ?>
</body>

</html>