<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>組み込み関数(ファイル読み込み)</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    $file = fopen("birds.txt", 'r');
    flock($file, LOCK_EX);
    print "<h1>step1</h1>";
    print '<table>';
    while ($lines = fgetcsv($file)) {
        foreach ($lines as $line) {
            $data = explode(" ", $line);
            print "<tr>";
            foreach ($data as $value) {
                print "<td>{$value}</td>";
            }
            print "</tr>";
        }
    }
    print "</table>";
    flock($file, LOCK_UN);
    fclose($file);

    print "<h1>step2</h1>";
    $file = fopen("birds.txt", 'r');
    while ($lines = fgetcsv($file)) {
        foreach ($lines as $line) {
            $data = explode(" ", $line);
            $ary[] = array("id" => $data[0], "area" => $data[1], "kenName" => $data[2], "kenBird" => $data[3]);
        }
    }
    foreach ($ary as $key => $value) {
        $id[$key] = $value['id'];
    }
    // array_multisortで'id'の列を昇順に並び替える
    array_multisort($id, SORT_ASC, $ary);
    print '<table>';
        foreach ($ary as $key => $value) {
            print "<tr>";
            print "<td>".$value['id']."</td>";
            print "<td>".$value['area']."</td>";
            print "<td>".$value['kenName']."</td>";
            print "<td>".$value['kenBird']."</td>";
            print "</tr>";
        }
    print "</table>";
    flock($file, LOCK_UN);
    fclose($file);
     print "<h1>step3</h1>";
    $file = fopen("birds.txt", 'r');
    while ($lines = fgetcsv($file)) {
        foreach ($lines as $line) {
            $data = explode(" ", $line);
            $ary2[] = array("id" => $data[0], "area" => $data[1], "kenName" => $data[2], "kenBird" => $data[3]);
        }
    }
    foreach ($ary2 as $key => $value) {
        $id[$key] = $value['id'];
    }
    // array_multisortで'id'の列を昇順に並び替える
    array_multisort($id, SORT_ASC, $ary2);
    print '<div><table>';
        foreach ($ary2 as $key => $value) {
            if($value['area'] != $temp){
            print "<tr><th colspan=\"5\">".$value['area']."</th></tr>";
            }
            print "<tr>";
            print "<td>".$value['id']."</td>";
            print "<td>".$value['kenName']."</td>";
            print "<td>".$value['kenBird']."</td>";
            print "</tr>";
            $temp = $value['area'];
        }
    print "</table></div>";
    flock($file, LOCK_UN);
    fclose($file);
    ?>
</body>

</html>