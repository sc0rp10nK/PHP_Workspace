<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>データの登録</title>
</head>

<body>
    <h1>データの登録</h1>
    <form method="POST" action="insert.php">
        <div>
            <label >氏名：</label><br />
            <input name="name" type="text" size="25" maxlength="255" />
        </div>
        <div>
            <label >年齢：</label><br />
            <input name="age" type="text" size="11" maxlength="11" />歳
        </div>
        <div>
            <label >性別：</label><br />
            <input name="sex" type="radio" value="男" >男
            <input name="sex" type="radio" value="女">女

        </div>
        <div>
            <label >登録日：</label><br />
            <input name="enter" type="text" size="11" maxlength="11" />
        </div>
        <div>
            <label >備考：</label><br />
            <input name="memo" type="text" size="30" maxlength="10" />
        </div>
        <div>
            <input type="submit" value="登録" />
        </div>
        <br />
    </form>
</body>

</html>