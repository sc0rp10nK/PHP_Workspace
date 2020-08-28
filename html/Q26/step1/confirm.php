<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
<?php
session_start();
$_SESSION['paytype'] = $_POST['paytype'];
require "included.php";
$item_name = get_buy_item($_SESSION['item']);
$item_price = get_buy_item_price($_SESSION['item']);
$payment_type = get_payment_type($_SESSION['paytype']);
?>
  <h2>購入内容の確認</h2>
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