<php?
  $host=SAE_MYSQL_HOST_M SAE_MYSQL_PORT； 
$user_name=SAE_MYSQL_USER；
$password=SAE_MYSQL_PASS；
 $mysql_database    = "app_shilijundiyigephp2";
  $sql ='select id,concent from id,content' ORDER BY 'id' DESC"; 
  $conn = mysql_connect($mysql_server_name,$mysql_username,$mysql_password);
  mysql_select_db($mysql_database,$conn);
  $result = mysql_query($sql，$conn);?>


<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<h1>留言本</h1>

<a href="zhuye.php">主页</a> | <a href="liuyan.php">继续留言</a>
<p>
<?
while($row=mysql_fetch_array($resule))
{
?>
留言内容:<? echo $row[content] ?>
<?
}
?>
</body>
</html>
