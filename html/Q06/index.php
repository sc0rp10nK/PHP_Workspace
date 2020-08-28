<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>九九表</title>
</head>

<body>
    <h1>九九表 Step 1</h1>
    <?php
    $row = 9;
    $col = 9;
    print '<table border="1">';
    for ($i = 1; $i <= $col; $i++) {
        print "<tr>";
        for ($j = 1; $j <= $row; $j++) {
            $ans = $i * $j;
            print "<td id=\"value\">{$ans}</td>";
        }
        print "</tr>";
    }
    print "</table>";
    print "<h1>九九表 Step 2</h1>";
    print '<div><table border="1">';
    for ($i = 1; $i <= $col; $i++) {
        print "<tr>";
        print "<td id=\"step\">{$i}の段</td>";
        for ($j = 1; $j <= $row; $j++) {
            $ans = $i * $j;
            print "<td id=\"value\">{$ans}</td>";
        }
        print "</tr>";
    }
    print "</table></div>";
    ?>
</body>

</html>