<?php
require_once '../DbManager.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // フォームからPOSTによって要求された場合
  $timestamp = time();
  $date = date('Y-n-j H:i:s', $timestamp);
  try {
    $db = getDb();
    $stt = $db->prepare(
      'INSERT INTO bbs(type, data,comment,uploaddate) VALUES(:type, :data,:comment,:uploaddate)'
    );
    $file = fopen($_FILES['photo']['tmp_name'], 'rb');
    $comment = $_POST['comment'];
    $stt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
    $stt->bindValue(':data', $file, PDO::PARAM_LOB);
    $stt->bindValue(':comment', $comment);
    $stt->bindValue(':uploaddate', $date);
    $stt->execute();
  } catch (PDOException $e) {
    print $e;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>アップロード処理</title>
    <style type="text/css">
    #bbs table,
    #bbs th,
    #bbs td {
      border-collapse: collapse;
      border: 1px solid black;
    }
    #bbs td {
      padding: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
    <h2>画像ファイルアップロード</h2>
    <form method="POST" action="index.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="comment">コメント：</label></td>
                <td><input type="text" name="comment" /></td>
            </tr>
            <tr>
                <td><label for="upfile">ファイルのパス：</label>
                    <input type="hidden" name="max_file_size" value="1000000" /></td>
                <td><input id="photo" type="file" name="photo" size="50" />
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="アップロード" /></td>
            </tr>
        </table>
    </form>
    <hr>
</body>
</html>
<?php
require_once '../DbManager.php';
try {
  $db = getDb();
  // SQL文の組み立て（クエリの組み立て）
  $sql = 'SELECT * FROM bbs ORDER BY id DESC';
  //クエリ実行（データを取得）
  $res = $db->query($sql);
  //取得したデータを全てフェッチする
  $data = $res->fetchAll();
  // 取得したデータを出力
  print "<table id=\"bbs\"><tr><td width='300px'>日時</td><td width='200px'>コメント</td><td width='420px'>画像</td></tr>";
  foreach ($data as $key => $value) {
    printf(
      "<tr><td>%s</td><td>%s</td><td><img src='data:image/png;base64,%s' ></td></tr>",
      $value['uploaddate'],
      $value['comment'],
      base64_encode($value['data'])
    );
  }
  print '</table>';
} catch (PDOException $e) {
  print "エラーメッセージ：{$e->getMessage()}";
}


?>
