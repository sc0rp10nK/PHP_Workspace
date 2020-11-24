<?php
session_start();
print "セッションを開始しました<br>";
print "セッション名：". session_name();
print "<br>";
print "セッションID：". session_id();
?>