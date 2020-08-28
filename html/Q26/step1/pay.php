<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['address'] = $_POST['address'];
    ?>
    <h2>支払方法の選択</h2>

    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>代引き</td>
                <td><input type="radio" name='paytype' value='0' checked/></td>
            </tr>
            <td>銀行振込</td>
            <td><input type="radio" name='paytype' value='1' /></td>
            </tr>
            <td>コンビニ払い</td>
            <td><input type="radio" name='paytype' value='2' /></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="内容の確認へ">
    </form>
</body>

</html>