<?php
    header('Content-Type: text/html; charset=utf-8');

$link=mysql_connect("localhost", "root", "sqlpasswd");
mysql_select_db (scores);
mysql_set_charset('utf8',$link);

$sql="TRUNCATE TABLE test";
$result=mysql_query($sql); 
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>