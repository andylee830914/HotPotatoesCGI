<script language="javascript">setTimeout("self.opener = null; self.close();",5000)</script>
<?php
header('Content-Type: text/html; charset=utf-8');
$realname = $_POST['realname'];
$Exercise = $_POST['Exercise'];
$Score = $_POST['Score'];
$Start_Time = $_POST['Start_Time'];
$End_Time = $_POST['End_Time'];
// Connect to the local database using username root and no password.
$link=mysql_connect("localhost", "root", "ilovetaiwan1010");
// Select our database named scores.
mysql_select_db (scores);
mysql_set_charset('utf8',$link);
// insert our 5 fields into the table eng101
mysql_query ("insert into test
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
//Provide some feedback to the student.
echo ("Your answers have been saved!");
?>