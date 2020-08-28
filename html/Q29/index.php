<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>レンタル処理</title>
    <style type="text/css">
      div table {
        background-color: #ff6633;
      }
      div th {
        background-color: #ff9933;
        color: #ffffff;
      }
      div td {
        background-color: #ffffff;
        color: #ff6633;
      }
    </style>
  </head>
  <body>
    <h2>レンタル処理</h2>
    <div>
      <table>
        <tr>
          <th colspan="2">レンタル料金表</th>
          <th>当日</th>
          <th>1泊2日</th>
          <th>2泊3日</th>
          <th>7泊8日</th>
        </tr>
        <tr>
          <td rowspan="2">DVD/Bluray</td>
          <td>新作</td>
          <td>340円</td>
          <td>390円</td>
          <td>440円</td>
          <td>440円</td>
        </tr>
        <tr>
          <td>旧作</td>
          <td>－</td>
          <td>－</td>
          <td>－</td>
          <td>100円</td>
        </tr>
        <tr>
          <td rowspan="2">CD</td>
          <td>新作</td>
          <td>260円</td>
          <td>310円</td>
          <td>360円</td>
          <td>360円</td>
        </tr>
        <tr>
          <td>旧作</td>
          <td>260円</td>
          <td>－</td>
          <td>－</td>
          <td>310円</td>
        </tr>
      </table>
    </div>
    <form method="POST" action="view.php">
      <table>
        <tr>
          <td><label>メディア</label></td>
          <td>
            ：<input type="radio" name="mediaName" value="0" />DVD／Bluray
            <input type="radio" name="mediaName" value="1" />CDアルバム
          </td>
        </tr>
        <tr>
          <td><label>新作／旧作</label></td>
          <td>
            ：<input type="radio" name="mediaType" value="0" />新作
            <input type="radio" name="mediaType" value="1" />旧作
          </td>
        </tr>
        <tr>
          <td><label>貸出日数</label></td>
          <td>
            ：<input type="radio" name="rentalDays" value="0" />当日
            <input type="radio" name="rentalDays" value="1" />1泊2日
            <input type="radio" name="rentalDays" value="2" />2泊3日
            <input type="radio" name="rentalDays" value="3" />7泊8日
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="計算" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
