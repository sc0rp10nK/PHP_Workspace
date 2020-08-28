<?php
function printData(string $fileName){
    $file = fopen($fileName, 'r');
    while ($lines = fgetcsv($file)) {
        foreach ($lines as $line) {
            $data = explode("@", $line);
            $ary[] = array("name" => $data[0], "java" => $data[1], "db" => $data[2], "html" => $data[3]);
        }
    }
    flock($file, LOCK_UN);
    fclose($file);
    printHeader($fileName);
    printRow($ary);
    printFooter();
}
function printHeader(string $fileName){
    print "<p>{$fileName}</p>";
    print '<table border="1">';
    print "<tr><th>氏名</th><th>JAVA</th><th>DB</th><th>HTML</th><th>平均</th></tr>";
}
function printRow($ary){
    foreach ($ary as $key => $value) {
        print "<tr>";
        print "<td>".$value['name']."</td>";
        print "<td>".$value['java']."</td>";
        print "<td>".$value['db']."</td>";
        print "<td>".$value['html']."</td>";
        $avg = number_format(($value['java'] + $value['db'] + $value['html']) / 3, 2);
        print "<td>{$avg}</td>";
        print "</tr>";
    }
}
function printFooter(){
    print "</table>";
}
function printData2(string $fileName){
    global $rows;
    $rows = 0;
    $file = fopen($fileName, 'r');
    while ($lines = fgetcsv($file)) {
        foreach ($lines as $line) {
            $data = explode("@", $line);
            $ary[] = array("name" => $data[0], "java" => $data[1], "db" => $data[2], "html" => $data[3]);
        }
        $rows++;
    }
    flock($file, LOCK_UN);
    fclose($file);
    printHeader2($fileName);
    printRow2($ary);
    printFooter2();
}
function printHeader2(string $fileName){
    print "<p>{$fileName}</p>";
    print '<table border="1">';
    print "<tr><th id=\"title\">氏名</th><th id=\"title\">JAVA</th><th id=\"title\">DB</th><th id=\"title\">HTML</th><th id=\"title\">平均</th></tr>";
}
function printRow2($ary){
    global $sumjava;
    global $sumdb;
    global $sumhtml;
    global $sumavg;
    $sumjava = 0;
    $sumdb = 0;
    $sumhtml = 0;
    $sumavg = 0;
    foreach ($ary as $key => $value) {
        print "<tr>";
        print "<td>".$value['name']."</td>";
        print "<td>".$value['java']."</td>";
        print "<td>".$value['db']."</td>";
        print "<td>".$value['html']."</td>";
        $avg = number_format(($value['java'] + $value['db'] + $value['html']) / 3, 2);
        print "<td>{$avg}</td>";
        print "</tr>";
        $sumjava += $value['java'];
        $sumdb += $value['db'];
        $sumhtml += $value['html'];
        $sumavg += $avg;
    }
}
function printFooter2(){
    global $sumjava;
    global $sumdb;
    global $sumhtml;
    global $sumavg;
    global $rows;
    $avgJava = number_format($sumjava / $rows,2);
    $avgDb = number_format($sumdb / $rows,2);
    $avgHtml = number_format($sumhtml / $rows,2);
    $avgAvg = number_format($sumavg / $rows,2);

    print "<tr><th id=\"title\">平均</th><td>{$avgJava}</td><td>{$avgDb}</td><td>{$avgHtml}</th><td>{$avgAvg}</td></tr>";
    print "</table>";
}
