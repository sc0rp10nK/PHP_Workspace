<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>レンタル処理</title>
  <style type="text/css">
    table,  td,  th {
      border-collapse: collapse;
      border: 1px solid black;
    }
  </style>
</head>
<?php
//メディア
$mediaName = ['DVD/Bluray', 'CDアルバム'];
//タイプ
$mediaType = ['新作', '旧作'];
//レンタル日数（新作）
$rentalDays = ['当日', '1泊2日', '2泊3日', '7泊8日'];
//レンタル日数（旧作，DVD/Bluray）
$rentalDaysDVD = ['7泊8日', '7泊8日', '7泊8日', '7泊8日'];
//レンタル日数（旧作，CD）
$rentalDaysCD = ['当日', '7泊8日', '7泊8日', '7泊8日'];
//レンタル料金表
$pay = [
  [340, 390, 440, 440],
  [100, 100, 100, 100],
  [260, 310, 360, 360],
  [260, 310, 310, 310],
];
?>
<body>
  <h2>レンタル料金</H2>
  <?php
  $mName = $mediaName[$_POST['mediaName']];
  $mType = $mediaType[$_POST['mediaType']];
  $timestamp = time();
  $date = date("Y年m月d日", $timestamp);
  $Rdate; //返却日
  $sum;
  switch ($_POST['mediaType']) {
    case 0: //新作
      $rDay = $rentalDays[$_POST['rentalDays']];
      switch ($_POST['rentalDays']) {
        case 0:
          $Rdate = $date;
          if ($_POST['mediaName'] == 0) {
            $sum = $pay[0][0];
          } else {
            $sum = $pay[2][0];
          }
          break;
        case 1:
          $Rdate = date("Y年m月d日", strtotime('2 day'));
          if ($_POST['mediaName'] == 0) {
            $sum = $pay[0][1];
          } else {
            $sum = $pay[3][1];
          }
          break;
        case 2:
          $Rdate = date("Y年m月d日", strtotime('3 day'));
          if ($_POST['mediaName'] == 0) {
            $sum = $pay[0][2];
          } else {
            $sum = $pay[2][2];
          }
          break;
        case 3:
          $Rdate = date("Y年m月d日", strtotime('8 day'));
          if ($_POST['mediaName'] == 0) {
            $sum = $pay[0][3];
          } else {
            $sum = $pay[2][3];
          }
          break;
      }
      break;
    case 1: //旧作
      switch ($_POST['mediaName']) {
        case 0: //DVD
          $rDay = $rentalDaysDVD[$_POST['rentalDays']];
          $Rdate = date("Y年m月d日", strtotime('8 day'));
          $sum = $pay[1][$_POST['rentalDays']];
          break;
        case 1: //CD
          $rDay = $rentalDaysCD[$_POST['rentalDays']];
          switch ($_POST['rentalDays']) {
            case 0:
              $Rdate = $date;
              $sum = $pay[3][0];
              break;
            case 1:
            case 2:
            case 3:
              $Rdate = date("Y年m月d日", strtotime('8 day'));
              $sum = $pay[3][$_POST['rentalDays']];
              break;
          }
          break;
      }
      break;
  }
  print "<table>";
  print "<tr><th>レンタル品目</th><td>：{$mName} {$mType} {$rDay}</td></tr>";
  print "<tr><th> 貸　出　日 </th><td>：{$date}</td></tr>";
  print "<tr><th> 返　却　日 </th><td>：{$Rdate}</td></tr>";
  print "<tr><th> 料　　　金</th><td>：{$sum}円</td></tr>";
  print "</table>";
  ?>
  <br />
  <a href="index.php">トップページへ</a>
</body>

</html>