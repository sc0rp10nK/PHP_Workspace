
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>登録結果</title>
</head>

<body>
  <?php  ?>
  <h1>memberテーブル表示</h1>
  <table border="1">
    <tr>
      <th>id</th>
      <th>氏名</th>
      <th>性別</th>
      <th>年齢</th>
      <th>登録日</th>
      <th>備考</th>
    </tr>
    <?php
    require_once '../DbManager.php';
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $enter = $_POST['enter'];
    $memo = $_POST['memo'];
    try {
      $db = getDb();
      // INSERT文を変数に格納
      $sql =
        'INSERT INTO member (nam, sex, old, enter, memo) VALUES (:nam, :sex, :old, :enter, :memo)';

      //トランザクション処理
      $db->beginTransaction();
      // 挿入する値は空のまま、SQL実行の準備をする
      $stmt = $db->prepare($sql);

      // 挿入する値を配列に格納する
      $params = [
        ':nam' => $name,
        ':sex' => $sex,
        ':old' => $age,
        ':enter' => $enter,
        ':memo' => $memo,
      ];

      // 挿入する値が入った変数をexecuteにセットしてSQLを実行
      $stmt->execute($params);

      print "氏名『{$name}』をid：{$db->lastInsertId()}で登録しました";
      // SQL文の組み立て（クエリの組み立て）
      $sql = 'SELECT * FROM member ORDER BY id DESC';
      //クエリ実行（データを取得）
      $res = $db->query($sql);
      //取得したデータを全てフェッチする
      $data = $res->fetchAll();
      // 取得したデータを出力
      foreach ($data as $key => $value) {
        print '<tr>';
        print "<td>{$value['id']}</td>";
        print "<td>{$value['nam']}</td>";
        print "<td>{$value['sex']}</td>";
        print "<td>{$value['old']}</td>";
        print "<td>{$value['enter']}</td>";
        print "<td>{$value['memo']}</td>";
        print '</tr>';
      }
    } catch (PDOException $e) {
      print "エラーメッセージ：{$e->getMessage()}";
    }
    ?>
  </table><br />
  <a href="index.php">トップページに戻る</a>
</body>

</html>