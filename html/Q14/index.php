<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>支払金額計算</title>
    <style type="text/css">
        table,
        td,
        tr {
            border-collapse: collapse;
            border: 1px solid;
        }
    </style>
</head>
<?php
?>

<body>
    <h1>支払金額計算</h1>
    <?php
    require "function.php";
    print '<table border="1">';
    print "<tr><th>商品名</th><th>数量</th><th>単価</th><th>金額</th><th>累計</th></tr>";
    printRow('雑誌', 1480, 3, 10);
    printRow('ジュース', 100, 2, 10);
    printRow('弁当', 480, 1, 10);
    print "</table>";
    ?>
</body>

</html>