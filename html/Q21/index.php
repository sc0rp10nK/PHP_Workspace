<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>POST</title>
</head>
<body>
    <h2>お買上げ金額計算</h2>
    <form method="POST" action="calc.php">
    <label for="name">商品名：</label>
    <input id="name" type="text" name="name" size="15"/>
    <br>
    <label for="price">単　価：</label>
    <input id="price" type="text" name="price" size="15"/>円
    <br>
    <label for="num">数　量：</label>
    <input id="num" type="text" name="num" size="15"/>個
    <br>
    <input type="submit" value="計算"/>
    </form>
</body>
</html>