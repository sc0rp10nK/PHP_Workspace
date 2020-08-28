<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>個人情報入力</title>
    <style type="text/css">
    </style>
</head>
<body>
    <h2>個人情報入力</h2>
    <form method="POST" action="check.php">
        <label for="name">氏名：</label>
        <input id="name" type="text" name="name" size="15" />
        <br>
        <label for="address">住所：</label>
        <input id="address" type="text" name="address" size="15" />
        <br>
        <input type="submit" value="送信"/>
    </form>
</body>

</html>