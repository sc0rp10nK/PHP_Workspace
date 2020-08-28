<?php
$ext = pathinfo($_FILES['upfile']['name']);
$perm = ['gif', 'jpg', 'jpeg', 'png'];
$file = fopen("dat.txt", 'r');
while ($lines = fgets($file)) {
  $data = explode(",", $lines);
  $ary[] = ["comment" => $data[0], "img" => $data[1]];
}
if ($_FILES['upfile']['error'] !== UPLOAD_ERR_OK) {
  $msg = [
    UPLOAD_ERR_INI_SIZE => 'php.iniのupload_max_filesize制限を越えています。',
    UPLOAD_ERR_FORM_SIZE => 'HTMLのMAX_FILE_SIZE 制限を越えています。',
    UPLOAD_ERR_PARTIAL => 'ファイルが一部しかアップロードされていません。',
    UPLOAD_ERR_NO_FILE => 'ファイルはアップロードされませんでした。',
    UPLOAD_ERR_NO_TMP_DIR => '一時保存フォルダが存在しません。',
    UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました。',
    UPLOAD_ERR_EXTENSION => '拡張モジュールによってアップロードが中断されました。',
  ];
  $err_msg = $msg[$_FILES['upfile']['error']];
} elseif (!in_array(strtolower($ext['extension']), $perm)) {
  $err_msg = '画像以外のファイルはアップロードできません。';
} elseif (!@getimagesize($_FILES['upfile']['tmp_name'])) {
  $err_msg = 'ファイルの内容が画像ではありません。';
} else {
  $src = $_FILES['upfile']['tmp_name'];
  $dest = mb_convert_encoding($_FILES['upfile']['name'], 'SJIS-WIN', 'UTF-8');
  if (!move_uploaded_file($src, 'up/' . $dest)) {
    $err_msg = 'アップロード処理に失敗しました。';
  }
}
if (isset($err_msg)) {
  die('<div style="color:Red;">' . $err_msg . '</div>');
}
$img = "up/" . $_FILES['upfile']['name'];
$comment = $_POST['comment'];
$ary[] = ["comment" => $comment, "img" => $img];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table{
          border-collapse: collapse;
        }
        th,
        td
       {
         width:200px;
           text-align:center;
            border: 1px solid;
        }
        img{
          margin:30px;
        }
    </style>
</head>
<body>
    <h1>アップロード画像</h1>
</body>
</html>
<?php
print "<table>";
print "  <tr>
<th>コメント</th>
<th>画像</th>
</tr>";
foreach ($ary as $key => $value) {
  print "<tr>";
  print "<td>{$value['comment']}</td>";
  print "<td><img src={$value['img']} width=\"400px\" height=\"400px\"></td>";
  print "</tr>";
}
print "</table>";
flock($file, LOCK_UN);
fclose($file);
$file = fopen("dat.txt", "a");
fwrite($file, $comment . "," . $img . "\n");
fclose($file);
print '<br>';
print '<br>';
print "<a href=\"index.php\">アップロードページへ</a>";


?>
