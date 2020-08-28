<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    session_start();
    if (isset($_POST['name'])) {
      $_SESSION['name'] = $_POST['name'];
    }
    if (isset($_POST['address'])) {
      $_SESSION['address'] = $_POST['address'];
    }
    switch ($_SESSION['paytype']) {
      case 0:
        $is_enable0 = true;
        break;
      case 1:
        $is_enable1 = true;
        break;
      case 2:
        $is_enable2 = true;
      default:
        $is_enable0 = true;
        break;
    }
    ?>
    <h2>支払方法の選択</h2>
    <ol class="breadcrumb">
        <li>
            <a itemprop="item" href="adr.php">
                <span itemprop="name">発送先情報入力</span>
            </a>
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
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>代引き</td>
                <td><input type="radio" name='paytype' value='0' <?= $is_enable0
                  ? 'checked'
                  : '' ?>/></td>
            </tr>
            <td>銀行振込</td>
            <td><input type="radio" name='paytype' value='1' <?= $is_enable1
              ? 'checked'
              : '' ?>/></td>
            </tr>
            <td>コンビニ払い</td>
            <td><input type="radio" name='paytype' value='2' <?= $is_enable2
              ? 'checked'
              : '' ?>/></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="内容の確認へ">
    </form>
</body>

</html>