<?php
function getDb()
{
  $dsn = 'mysql:dbname=selfphp; host=myapp-db; charset=utf8';
  $usr = 'selfusr';
  $passwd = 'selfpass';

  try {
    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  } catch (PDOException $e) {
    print "接続エラー:{$e->getMessage()}";
  } finally {
    $db = null;
  }
}
?>