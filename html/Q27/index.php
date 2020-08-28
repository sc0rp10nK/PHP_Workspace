<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form method="POST" action="view.php" enctype="multipart/form-data">
      <br />
      <label for="comment">コメント：</label>
      <input id="comment" type="text" name="comment" size="40" />
      <br />
      <label for="upfile">ファイルのパス：</label>
      <input type="hidden" name="max_file_size" value="1000000" />
      <input id="upfile" type="file" name="upfile" size="40" />
      <br />
      <input type="submit" value="アップロード" />
    </form>
  </body>
</html>
