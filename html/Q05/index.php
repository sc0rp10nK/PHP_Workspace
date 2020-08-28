<!DOCTYPE html>
<html>
<?php
$ary = [
    ['政令指定都市', 'seirei.html', 'image/seirei.jpg'],
    ['明治村', 'meijimura.html', 'image/photo1.jpg'],
    ['沖縄の名所', 'meisyo.html', 'image/zakimi.jpg'],
];
?>

<head>
    <meta charset="UTF-8" />
    <title>演習問題</title>
    <style type="text/css">
    </style>
</head>

<body>
    <h1>リンク集</h1>
    <?php
    $i = 1;
    foreach ($ary as $value) {
        print "<a href=\"{$value[1]}\">{$value[0]}</a><br>";
        print "<a href=\"$value[1]\"> <img src=\"$value[2]\" alt={$value[0]}></a><br>";
    }
    ?>
</body>

</html>