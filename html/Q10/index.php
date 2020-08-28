<?php
$title='Q10';
$h1='【ファイル書き込み】';
$p='phpのファイル書き込みによって作成されたhtmlファイル';
$img='photo1.jpg';
$data = array("<!DOCTYPE html>"
,"<html>"
,"<head>"
,"<meta charset=\"UTF-8\" />"
,"<title>{$title}</title>"
,"</head>"
,"<body>"
,"<h1>{$h1}</h1>"
,"<p>{$p}</p>"
,"<img src=\"{$img}\">"
,"</body>");
$file = fopen("out.html",'wb');
flock($file,LOCK_EX);
foreach($data as $value){
    fwrite($file,"{$value}\n");
}
flock($file,LOCK_UN);
fclose($file);
print "<h1>HTMLファイルを作成しました</h1>";
?>