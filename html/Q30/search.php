<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表示結果</title>
    <style type="text/css">
    table,
    th,
    td {
      border-collapse: collapse;
      border: 1px solid black;
    }

    td {
      padding: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
    <h1>表示結果</h1>
    <?php
    require_once '../DbManager.php';
    try {
      $db = getDb();
      $type = $_POST['type'];
      $order = $_POST['order'];
      switch ($type) {
        case 0:
          $type = 'id';
          break;
        case 1:
          $type = 'nam';
          break;
        case 2:
          $type = 'sex';
          break;
        case 3:
          $type = 'old';
          break;
        case 4:
          $type = 'enter';
          break;
      }
      switch ($order) {
        case 0:
          $order = 'ASC';
          break;
        case 1:
          $order = 'DESC';
          break;
      }
      // SQL文の組み立て（クエリの組み立て）
      $sql = "SELECT * FROM member ORDER BY $type $order";
      //クエリ実行（データを取得）
      $res = $db->query($sql);
      //取得したデータを全てフェッチする
      $data = $res->fetchAll();
      // 取得したデータを出力
      print '<table >';
      print '  <tr><th>id</th><th>氏名</th><th>性別</th><th>年齢</th><th>登録日</th><th>備考</th></tr>';
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
      print '</table>';
    } catch (PDOException $e) {
      print "エラーメッセージ：{$e->getMessage()}";
    }
    ?>
</body>
</html>