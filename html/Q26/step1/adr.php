<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['item'] = $_POST['item'];
    ?>
    <h2>発送先情報入力</h2>
    <form action="pay.php" method="post">
        <table>
            <tr>
                <td>氏　名：</td>
                <td><input type="text" name="name" value=<?= e(
                  $_SESSION['name'] ?? ''
                ) ?>></td>
            </tr>
            <td>住　所：</td>
            <td><input type="text" name="address"value=<?= e(
              $_SESSION['address'] ?? ''
            ) ?>></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="支払方法の選択へ">
    </form>
</body>
</html>