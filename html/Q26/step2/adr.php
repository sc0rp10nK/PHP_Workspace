<!DOCTYPE html>
<html>

<head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title></title>
</head>
<body>
    <?php
    session_start();
    if (isset($_POST['item'])) {
      $_SESSION['item'] = $_POST['item'];
    }
    ?>
    <h2>発送先情報入力</h2>
    <ol class="breadcrumb">
        <li>
                <span itemprop="name">発送先情報入力</span>
        </li>

        <li>
                <span itemprop="name">支払方法の選択</span>
        </li>

        <li>
                <span itemprop="name">購入内容の確認</span>
        </li>
        <li>
                <span itemprop="name">購入確定</span>
        </li>
    </ol>
    <form action="pay.php" method="post">
        <table>
            <tr>
                <td>氏　名：</td>
                <td><input type="text" name="name" value=<?= $_SESSION[
                  'name'
                ] ?? '' ?>></td>
            </tr>
            <td>住　所：</td>
            <td><input type="text" name="address"value=<?= $_SESSION[
              'address'
            ] ?? '' ?>></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="支払方法の選択へ">
    </form>
</body>
</html>