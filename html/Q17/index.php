<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ユーザ定義関数5(可変長引数)</title>
</head>
<?php
?>

<body>
    <?php
    require "function.php";
    list($max,$min,$avg,$sum) = checkData(66,11, 33, 51, 73, 91, 83, 61, 43, 21);
    print "最高点:{$max},最低点:{$min},平均点{$avg},合格数{$sum}<br>";
    list($max,$min,$avg,$sum) = checkData(55,25, 43, 67, 81, 100, 55);
    print "最高点:{$max},最低点:{$min},平均点{$avg},合格数{$sum}";
    ?>
</body>

</html>