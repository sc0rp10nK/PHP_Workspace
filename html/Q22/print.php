<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>POST</title>
</head>

<body>
    <?php
    print "<h2>{$_POST['name']} 検定試験合格状況</h2>";
    if ($_POST['state_exam'] != null) {
        foreach($_POST['state_exam'] as $value){
            print "{$value}　合格</br>";
        }
    }
    if ($_POST['certify_exam'] != null) {
        foreach($_POST['certify_exam'] as $value){
            print "{$value}　合格</br>";
        }    }
    if ($_POST['certify_java_exam'] != null) {
        foreach($_POST['certify_java_exam'] as $value){
            print "{$value}　合格</br>";
        }    }
    ?>
    <br /><a href="index.html">トップページに戻る</a>
</body>

</html>