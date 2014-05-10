<?php $link=mysql_connect("localhost", "root", "sqlpasswd");
mysql_select_db (scores);
mysql_set_charset('utf8',$link);
?>

<table  class="table table-striped">
    <thead><tr><th>ID</th><th>題目</th><th>姓名</th><th>分數</th><th>開始時間</th><th>完成時間</th><tr></thead>
    <tbody>
        <?php
$sql="SELECT * from test ORDER BY ID DESC";
$result=mysql_query($sql);
    for($j=0;$j<mysql_num_rows($result);$j++)
{
 echo "<TR>";
 for ($k=0;$k<mysql_num_fields($result);$k++)
 {
   echo "<TD>".mysql_result($result,$j,$k)."</TD>";
 }
 echo "</TR>";
}
echo "</TABLE>";
?>
    </tbody>
    </table>