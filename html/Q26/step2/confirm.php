<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
  session_start();
  if (isset($_POST['paytype'])) {
    $_SESSION['paytype'] = $_POST['paytype'];
  }
  require "included.php";
  $item_name = get_buy_item($_SESSION['item']);
  $item_price = get_buy_item_price($_SESSION['item']);
  $payment_type = get_payment_type($_SESSION['paytype']);
  ?>
  <h2>購入内容の確認</h2>
  <ol class="breadcrumb">
        <li>
            <a itemprop="item" href="adr.php">
                <span itemprop="name">発送先情報入力</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li >
            <a itemprop="item" href="pay.php">
                <span itemprop="name">支払方法の選択</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
        <li>
                <span itemprop="name">購入内容の確認</span>
        </li>
        <li>
                <span itemprop="name">購入確定</span>
        </li>
    </ol>
  <form action="thx.php" method="post">
  <table>
    <tr>
      <th>購入商品</th>
      <td></td>  
    </tr>
    <tr>
    <tr>
      <td>商品名</td>      
      <td>：<?= $item_name ?></td>
    </tr>
    <tr>
      <td>価　格</td>      
      <td>：<?= $item_price ?>円</td>
    </tr>
    <tr> 
      <th>発送先</th><td></td>
      </tr>
      <td>氏　名</td>
      <td>：<?= $_SESSION['name'] ?></td>
    </tr>
    <tr> 
      <td>住　所</td>
      <td>：<?= $_SESSION['address'] ?></td>
    </tr>
    <tr> 
      <th>支払方法</th><td></td>
    </tr>
    <tr> 
      <td></td>
      <td>：<?= $payment_type ?></td>
    </tr>    
  
  </table>
  <br>
  <input type="submit" value="購入の確定">
</form>
</body>
</html>