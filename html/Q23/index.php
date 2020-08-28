<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>GET</title>
  </head>
  <body>
    <h2>ピザオーダー</h2>
    <form method="GET" action="print.php">
      <label for="pizza_name">ピザの種類　　：</label>
      <select name="pizza_name">
        <option value="0">マルゲリータ</option>
        <option value="1">シーフード</option>
        <option value="2">てりやきチキン</option>
      </select>
      <br />
      <label for="pizza_size">サイズ　　　　：</label>
      <input type="radio" name="pizza_size" value="0" />SS
      <input type="radio" name="pizza_size" value="1" />S
      <input type="radio" name="pizza_size" value="2" checked="checked" />M
      <input type="radio" name="pizza_size" value="3" />L
      <br />
      <label for="pizza_cheese_type">チーズタイプ　：</label>
      <input
        type="radio"
        name="pizza_cheese_type"
        value="0"
        checked="checked"
      />あっさり
      <input type="radio" name="pizza_cheese_type" value="1" />深くコクあり
      <br />
      <label for="pizza_option">追加トッピング：</label>
      <input type="checkbox" name="pizza_option[]" value="0" />オニオン＋200円
      <input
        type="checkbox"
        name="pizza_option[]"
        value="1"
      />ブロッコリー＋200円
      <input type="checkbox" name="pizza_option[]" value="2" />サラミ＋200円
      <input type="checkbox" name="pizza_option[]" value="3" />エビ＋200円
      <br />
      <input type="submit" value="送信" />
    </form>
  </body>
</html>
