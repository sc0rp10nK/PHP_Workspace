<!DOCTYPE html>
<html>
<?php
$student = [
    ["KBCit1-01", "山田"], ["KBCit1-02", "鈴木"], ["KBCit1-03", "北村"],
    ["KBCit2-01", "和田"], ["KBCit2-02", "橋本"], ["KBCit2-03", "本田"],
    ["KBCit3-01", "河野"], ["KBCit3-02", "佐藤"], ["KBCit3-03", "土居"],
    ["KBCgc1-01", "松田"], ["KBCgc2-02", "三井"], ["KBCgc3-03", "渡辺"],
    ["KTBit1-01", "川田"], ["KTBit2-02", "杉本"], ["KTBit3-03", "吉田"],
    ["KBCxxx1-01", "エラー1"], ["KBCit9-02", "エラー2"], ["KBCit3-x3", "エラー3"],
    ["123it1-01", "エラー4"], ["KTBitx-02", "エラー5"], ["KTBit303", "エラー6"],
];
$data
?>

<head>
    <meta charset="UTF-8" />
    <title>正規表現</title>
</head>

<body>
    <h1>正規表現</h1>
    <?php
    print "<h3>●KBCのITエンジニア化2年</h3>";
    foreach($student as $value){
        if(preg_match('/KBCit2-[0-9]{2}/',$value[0],$data)){
            print "{$value[1]}、";
        }
    }
    print "<br>";
    print "<h3>●KBCの学生</h3>";
    foreach($student as $value){
        if(preg_match('/KBC(it|gc)[123]-[0-9]{2}/',$value[0],$data)){
            print "{$value[1]}、";
        }
    }
    print "<br>";
    print "<h3>●2年生</h3>";
    foreach($student as $value){
        if(preg_match('/K(BC|TB)(it|gc)2-[0-9]{2}/',$value[0],$data)){
            print "{$value[1]}、";
        }
    }
    print "<br>";
    print "<h3>●出席番号3番</h3>";
    foreach($student as $value){
        if(preg_match('/K(BC|TB)(it|gc)[123]-03/',$value[0],$data)){
            print "{$value[1]}、";
        }
    }
    print "<br>";
    print "<h3>●エラーデータ</h3>";
    foreach($student as $value){
        if(!preg_match('/K(BC|TB)(it|gc)[123]-[0-9]{2}/',$value[0],$data)){
            print "{$value[1]}、";
        }
    }
    ?>
</body>

</html>