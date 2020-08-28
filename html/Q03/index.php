<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>演習問題</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    $ary = [
        ['A001', 'りんご', 180, 3],
        ['A002', 'いちご', 398, 0],
        ['A003', 'キウイ', 98, 3],
        ['A004', 'メロン', 3000, 0],
        ['A005', 'バナナ', 198, 5]
    ];
    print '<table border="1"><tr><th>商品id</th><th>商品名</th><th>単価</th><th>個数</th><th>金額</th></tr>';
    for ($i = 0; $i < count($ary); $i++) {
        print '<tr><td>' . $ary[$i][0] . '</td>' . '<td>' . $ary[$i][1] . '</td>' . '<td>' . $ary[$i][2] . '</td>' . '<td>' . $ary[$i][3] . '</td>' . '<td>' . $ary[$i][2] * $ary[$i][3] . '</td></tr>';
    }
    print '</table><br>';
    print '<table border="1"><tr><th>商品id</th><th>商品名</th><th>単価</th><th>個数</th><th>金額</th></tr>';
    foreach ($ary as $value) {
        if ($value[3] != 0) {
            print "<tr>";
            for($i = 0; $i < count($value); $i++){
            print '<td>' . $value[$i] . '</td>';
            }
            print'<td>' . $value[2] * $value[3] . '</td>';
            print"</tr>";
        }
        $sum += $value[2] * $value[3];
    }
    print '<tr><td colspan="4" id="sum">合計</td><td>' . $sum . '</td></tr>';
    print '</table><br>';
    print '<div><table><caption>売上表</caption><tr><th>商品id</th><th>商品名</th><th>単価</th><th>個数</th><th>金額</th></tr>';
    foreach ($ary as $value) {
        if ($value[3] != 0) {
            print "<tr>";
            for($i = 0; $i < count($value); $i++){
            print '<td>' . $value[$i] . '</td>';
            }
            print'<td>' . $value[2] * $value[3] . '</td>';
            print"</tr>";
        }
        $sum2 += $value[2] * $value[3];
    }
    print '<tr><td colspan="4" id="sum">合計</td><td>' . $sum2 . '</td></tr>';
    print '</table></div>';
    ?>
</body>

</html>