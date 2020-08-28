<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>リダイレクト</title>
</head>
<body>
<h2>リダイレクト</H2>
    <?php
        if($_POST['name'] != null && $_POST['address'] != null){
            print "氏名：{$_POST['name']}<br>";
            print "住所：{$_POST['address']}<br>";
        }else{
            header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/ng.php');
        }
    ?>
    <br />
    <a href="index.php">入力ページへ</a>
</body>

</html>