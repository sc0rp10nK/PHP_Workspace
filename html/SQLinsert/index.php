<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>データの登録</title>
</head>
<body>
<form method="POST" action="insert_process.php">
<div>
  <label for="isbn">ISBNコード：</label><br />
  <input id="isbn" type="text" name="isbn" size="25" maxlength="20" />
</div><div>
  <label for="title">書名：</label><br />
  <input id="title" type="text" name="title" size="35" maxlength="150" />
</div><div>
  <label for="price">価格：</label><br />
  <input id="price" type="text" name="price" size="6" maxlength="5" />円
</div><div>
  <label for="publish">出版社：</label><br />
  <input id="publish" type="text" name="publish" size="25" maxlength="30" />
</div><div>
  <label for="published">刊行日：</label><br />
  <input id="published" type="text" name="published" size="15" maxlength="10" />
</div><div>
  <input type="submit" value="登録" />
</div>
<?php
session_start();
$token = sha1(uniqid(mt_rand(), true));
$_SESSION['token'] = $token;
?>
<input type="hidden" name="token" value="<?php print $token; ?>" />
</form>
</body>
</html>