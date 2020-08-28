<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>アップロード画像</title>
  <style type="text/css">
    table,
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
  <h2>アップロード画像</H2>
  <?php
  //アップロードファイルチェック　教科書P347 リスト8.29とほぼ同じ
  $ext = pathinfo($_FILES['upfile']['name']);
  $perm = ['gif', 'jpg', 'jpeg', 'png'];
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
    //アップロードファイルの格納先（upディレクトリ）を指定してアップロード
    if (!move_uploaded_file($src, 'up/' . $dest)) {
      $err_msg = 'アップロード処理に失敗しました。';
    } else {
      //正常にアップロードされていた場合→ファイルに書き込み
      ($file = @fopen('dat.txt', 'a')) or die('ファイルを開けませんでした！');
      flock($file, LOCK_EX);
      $timestamp = time();
      $week = ['日', '月', '火', '水', '木', '金', '土'];
      $date = date(
        "Y年m月d日({$week[date('w', $timestamp)]})　H:i:s",
        $timestamp
      );
      //アップロードファイル名とコメントをコンマ区切りでファイルに書き込む
      $data =
        $date .
        "," .
        $_POST["comment"] .
        "," .
        $_FILES['upfile']['name'] .
        "\n";
      fwrite($file, $data);
      flock($file, LOCK_UN);
      fclose($file);
    }
  }
  if (isset($err_msg)) {
    die('<div style="color:Red;">' . $err_msg . '</div>');
  }
  //ファイルから読み込み
  $file = fopen('dat.txt', 'r');
  flock($file, LOCK_SH);
  print "<table><tr><td width='300px'>日時</td><td width='200px'>コメント</td><td width='420px'>画像</td></tr>";
  while ($fline = fgets($file, 1024)) {
    //1行読み込んで、コンマごとに分解して配列に格納
    $line = explode(",", $fline);
    //テーブルタグで編集して表示
    printf(
      "<tr><td>%s</td><td>%s</td><td><img src='up/%s' ></td></tr>",
      $line[0],
      $line[1],
      $line[2]
    );
  }
  print '</table>';
  flock($file, LOCK_UN);
  fclose($file);
  ?>
  <br />
  <a href="index.php">アップロードページへ</a>
</body>

</html>