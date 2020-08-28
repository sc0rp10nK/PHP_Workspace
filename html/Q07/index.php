<!DOCTYPE html>
<html>
<?php
$msg = "文字列関数は、文字列の加工や整形、部分文字列の検索／取得などを提供する"; //処理対象文字列
$key = "文字列"; //検索文字列
$rep = "数字"; //置換え文字列
$cut = "、";    //区切り文字
$tmp_ary = explode($cut, $msg); //分割して配列化
foreach ($tmp_ary as $value) {
    $re_msg .= "{$value}<br>";
}
?>

<head>
    <meta charset="UTF-8" />
    <title>文字列操作</title>
</head>

<body>
    <h1>文字列操作</h1>
    <?php
    printf("<h2>対象文字列:「%s」</h2>", $msg);
    printf("<h3>●文字数</h3>%s文字", mb_strlen($msg));
    printf("<h3>●最初に現れる「{$key}」の位置</h3>%s文字目", mb_strpos($msg, $key) + 1);
    printf("<h3>●最後に現れる「{$key}」の位置</h3>%s文字目", mb_strrpos($msg, $key) + 1);
    printf("<h3>●「{$rep}」で「{$key}」を置換え</h3>%s文字目", str_replace($key, $rep, $msg));
    printf("<h3>●「{$cut}」で分割</h3>%s",$re_msg);
    ?>
</body>

</html>