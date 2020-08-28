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
    print_r(sortData('A',10, 70, 30, 90, 50));
    print "</br>";
    print_r(sortData('D',20, 60, 40, 80));
    print "</br>";
    print_r(sortData('X',200, 400, 100));
    ?>
</body>

</html>