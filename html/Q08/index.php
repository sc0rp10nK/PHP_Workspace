<!DOCTYPE html>
<html>
<?php
$ary1 = [10, 30, 50];
$ary2 = [60, 40, 20];
$ary3 = array_merge($ary1,$ary2)
?>

<head>
    <meta charset="UTF-8" />
    <title>配列操作</title>
</head>

<body>
    <h1>配列操作</h1>
    <?php
    print '配列$ary1:';
    print_r($ary1);
    print '<br>配列$ary2:';
    print_r($ary2);
    print '<h3><th>●配列の$ary1と$ary2を結合し、$ary3を作成</h3>';
    print '配列$ary3:';
    print_r($ary3);
    print '<h3><th>●配列の要素数</h3>';
    printf ("%s要素",count($ary3));
    print '<h3><th>●配列の$ary3の末尾に80,70を追加、先頭を1要素削除</h3>';
    array_push($ary3,80,70);
    array_shift($ary3);
    print '配列$ary3:';
    print_r($ary3);
    print '<h3><th>●配列の$ary3を降順にソート</h3>';
    rsort($ary3);
    print '配列$ary3:';
    print_r($ary3);
    print '<h3><th>●配列$ary3の先頭と末尾以外を削除する</h3>';
    print '配列$ary3:';
    array_splice($ary3,1,count($ary3) - 2);
    rsort($ary3);
    print_r($ary3);
    ?>
</body>

</html>