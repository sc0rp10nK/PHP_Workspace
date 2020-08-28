<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ユーザ定義関数4(グローバル変数)</title>
    <style type="text/css">
        table,
        td,
        tr {
            border-collapse: collapse;
            border: 1px solid;
        }
        th{
            width: 100px;
        }
        #title{
            background-color: lightblue;
        }
    </style>
</head>
<?php
?>

<body>
    <?php
    require "function.php";
    print "<h2>step1</h2>";
    printData("data1.txt");
    printData("data2.txt");
    print "<h2>step2</h2>";
    printData2("data1.txt");
    printData2("data2.txt");
    ?>
</body>

</html>