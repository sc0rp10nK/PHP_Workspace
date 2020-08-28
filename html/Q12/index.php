<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>九九表</title>
    <style type="text/css">
        th {
            background-color: lime;
            width: 50px;
        }
        td {
            text-align: center;
            width: 30px;
        }
    </style>
</head>
<body>
    <h1>九九表</h1>
    <?php
    //関数の呼び出し
    printTimesTables(9,9);
    printTimesTables(3,3);
    ?>
</body>
</html>
<?php
//関数
function printTimesTables(int $row, int $col){
    print '<table border="1">';
    for ($i = 1; $i <= $row; $i++) { //行(掛けられる数)の走査
        print '<tr>';
        print '<th>' . $i . 'の段</th>'; //見出し列表示
        for ($j = 1; $j <= $col; $j++) { //列(掛ける数)の走査
            print '<td>' . $i * $j . '</td>';
        }
        print '</tr>';
    }
    print '</table><br/>';
}
?>