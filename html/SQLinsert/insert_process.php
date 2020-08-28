<?php
require_once '../DbManager.php';
//require_once '../MyValidator.php';

/*
session_start();
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
  die('不正なアクセスが行われました。');
}
*/
/*
$v = new MyValidator();
$v->requiredCheck($_POST['isbn'], 'ISBNコード');
$v->regexCheck($_POST['isbn'], 'ISBNコード',
  '/^978-4-[0-9]{3,6}-[0-9]{3,6}-[0-9X]{1}$/');
$v->duplicateCheck($_POST['isbn'], 'ISBNコード', 
  'SELECT isbn FROM book WHERE isbn = :value');
$v->requiredCheck($_POST['title'], '書名');
$v->lengthCheck($_POST['title'], '書名', 100);
$v->intTypeCheck($_POST['price'], '価格');
$v->rangeCheck($_POST['price'], '価格', 10000, 1);
$v->inArrayCheck($_POST['publish'], '出版社',
  ['翔泳社', '秀和システム', '日経BP社', '技術評論社']);
$v->dateTypeCheck($_POST['published'], '刊行日');
$v();
*/
try {
  $db = getDb();
  $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(:isbn, :title, :price, :publish, :published)');
  $stt->bindValue(':isbn', $_POST['isbn']);
  $stt->bindValue(':title', $_POST['title']);
  $stt->bindValue(':price', $_POST['price']);
  $stt->bindValue(':publish', $_POST['publish']);
  $stt->bindValue(':published', $_POST['published']);
/*
  $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(?, ?, ?, ?, ?)');
  $stt->bindValue(1, $_POST['isbn']);
  $stt->bindValue(2, $_POST['title']);
  $stt->bindValue(3, $_POST['price']);
  $stt->bindValue(4, $_POST['publish']);
  $stt->bindValue(5, $_POST['published']);
*/
  $stt->execute();
  header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php');
} catch(PDOException $e) {
  print "エラーメッセージ：{$e->getMessage()}";
}
