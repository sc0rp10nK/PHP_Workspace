<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>PHPの基本</title>
</head>
<body>
<?php
    $title = "主なエスケープシーケンス";
    $data = [['エスケープシーケンス','概要'],["\\\\",'バックスラッシュ(円記号)'],["\\\"","ダブルクォート"]];
    print '<p>' . $title . '</p>';
    print '<table border="1"><tr><th>'.$data[0][0].'</th><th>'.$data[0][1].'</th></tr>'.'<tr><td>'.$data[1][0].'</td>'.'<td>'.$data[1][1].'</td></tr>'.'<tr><td>'.$data[2][0].'</td>'.'<td>'.$data[2][1].'</td>'.'</tr></table>';
?>
</body>
</html>