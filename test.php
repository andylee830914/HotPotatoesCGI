<script language="javascript">setTimeout("self.opener = null; self.close();",2000)</script>
<?php
header('Content-Type: text/html; charset=utf-8');
$realname = iconv("big5","utf-8",$_POST['realname']);
$Exercise = iconv("big5","utf-8",$_POST['Exercise']);
$Score = $_POST['Score'];
$Start_Time = iconv("big5","utf-8",$_POST['Start_Time']);
$End_Time = iconv("big5","utf-8",$_POST['End_Time']);
// Connect to the local database using username root and no password.
$link=mysql_connect("localhost", "root", "sqlpasswd");
// Select our database named scores.
mysql_select_db(scores);
mysql_set_charset('utf8',$link);
// insert our 5 fields into the table eng101
if ($_POST['Score']){mysql_query ("insert into test
(
realname,
Exercise,
Score,
Start_Time,
End_Time
)
VALUES
(
'$realname',
'$Exercise',
'$Score',
'$Start_Time',
'$End_Time'
)
");
};
//Provide some feedback to the student.
echo ("Your answers have been saved!");
?>