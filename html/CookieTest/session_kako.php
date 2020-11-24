<?php
session_start();
if(!isset($_SESSION["kaisu"])){
print "ようこそ1回目のご来場";
$_SESSION["kaisu"] = 1;
$_SESSION["date"][1] = date("Y年m月j日H時j分s秒");
}else{
$_SESSION["kaisu"]++;
$c = $_SESSION["kaisu"];
$_SESSION["date"][$c] = date("Y年m月j日H時j分s秒");
$i = 0;
foreach($_SESSION["date"] as $date){
    $i++;
    print "{$i}回目は{$date}でした<br>";
}
}
?>