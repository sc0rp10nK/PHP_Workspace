<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>アップロード処理</title>
</head>
<body>
    <h2>画像ファイルアップロード</h2>
    <form method="POST" action="view.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="comment">コメント：</label></td>
                <td><input type="text" name="comment" /></td>
            </tr>
            <tr>
                <td><label for="upfile">ファイルのパス：</label>
                    <input type="hidden" name="max_file_size" value="1000000" /></td>
                <td><input id="upfile" type="file" name="upfile" size="40" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="アップロード" /></td>
            </tr>
        </table>
    </form>
</body>

</html>