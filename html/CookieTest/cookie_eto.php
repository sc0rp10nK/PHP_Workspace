<?php
$eto = array("申","酉","戌","亥","子","丑","寅","卯","辰","巳","午","未");
if(!isset($_POST['y']) or !isset($_POST["n"])){
    if(!isset($_COOKIE["kaisu"])){
        setcookie("kaisu",1,time()+60*60*24*365);

        print "はじめてのご来場ありがとうございます<br>";
        print "あなたの生まれた年とニックネームを教えて下さい<br>";
        print "<form action='cookie_eto.php' method='post'>
            西暦<input type='text' name='y'>年生まれ<br>
            ニックネーム<input type='text' name='n'><br>
            <input type='submit' value='送信'></form>";
    }else{
        $n = $_COOKIE['kaisu'] + 1;
        setcookie("kaisu",$n,time()+60*60*24*365);
        print "{$_COOKIE['name']}さん";
        print "{$n}回目のご来場ありがとうございます";
        for($i = 0; $i <12; $i++){
            if($_COOKIE['year']%12 == $i){
                print "あなたの干支は{$eto[$i]}でしたよね";
            }
        }
    }
}else{
    setcookie("name",$_POST['n'],time()+60*60*24*365);
    setcookie("year",$_POST['y'],time()+60*60*24*365);
    print "ご登録ありがとうございました。";
}
?>