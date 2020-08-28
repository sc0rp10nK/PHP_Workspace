<!DOCTYPE html>
<html>
<?php
$ary = [
    26.3, 22.2, 27, 28.9, 28.4, 30.2, 30.7, 25.2, 27.4, 26.2,
    26.3, 26.7, 29.3, 24.9, 19.5, 25.7, 26.7, 25.3, 29, 29.5,
    29.1, 28.5, 25.2, 27.7, 30, 29.4, 30.4, 30.9, 29.2, 26.6
];
?>

<head>
    <meta charset="UTF-8" />
    <title>演習問題</title>
    <style type="text/css">
        .col {
            color: red;
        }
    </style>
</head>

<body>
    <h1>令和元年(2019年)松山市6月の最高気温</h1>
        <?php
            print '<table border="1">';
            $i = 1;
            foreach ($ary as $value) {
                print "<tr>";
                print "<td>{$i}</td>";
                if($value >= 30){
                    print "<td class=col>{$value}</td></tr>";
                }else{
                    print "<td>{$value}</td></tr>";
                }
                $i += 1;
            }
            print "</table>";
        ?>
</body>

</html>