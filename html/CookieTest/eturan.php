<?php
if(!isset($_COOKIE["kaisu"])){
    setcookie("kaisu",1,time() + 60 * 24 * 365);
    print "はじめてのご来場ありがとうございます";
}else{
    $n = $_COOKIE["kaisu"] + 1;
    setcookie("kaisu",$n,time() + 60 * 24 * 365);
    print "{$n}回目のご来場ありがとうございます";
}
?>