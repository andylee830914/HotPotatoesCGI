<?php $link=mysql_connect("localhost", "root", "sqlpasswd");
mysql_select_db (scores);
mysql_set_charset('utf8',$link);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>HotPotatoes 成績瀏覽</title>

    <!-- Bootstrap core CSS -->
    <link href="../irs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 <script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#tableHolder').load('refresh.php').fadeIn("slow");
}, 10000); // refresh every 10000 milliseconds


</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HotPotatoes 成績瀏覽</a>
        </div>
                    <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="clear.php">清除所有答案</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
<div  id="tableHolder"></div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../irs/dist/js/bootstrap.min.js"></script>
  </body>
</html>
