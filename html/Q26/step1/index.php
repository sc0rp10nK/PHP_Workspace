<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<body>
    <h2>購入商品選択</h2>
    <form action="adr.php" method="post">
        <table>
            <tr>
                <th>商品名</th>
                <th>価格</th>
                <th></th>
            </tr>
            <tr>
                <td>NintendoSwitch</td>
                <td>29980円</td>
                <td><input type="radio" checked name="item" value="0"/></td>
            </tr>
            <td>PlayStation4</td>
            <td>39980円</td>
            <td><input type="radio"  name="item" value="1"/></td>
            </tr>
            <td>XboxOneX</td>
            <td>39980円</td>
            <td><input type="radio"  name="item" value="2"/></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="購入手続き">
    </form>
</body>

</html>
