<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<php?
 include("conn.php")
  $sql ='select* from message' ORDER BY 'id' DESC"; 
  $result = mysql_query($sql);
  while($row=mysql_fetch_array($resule))
{
?>
<html>

<body>
<h1>留言本</h1>
<a href="zhuye.php">主页</a> | <a href="liuyan.php">去添加留言</a>
<p>

留言内容:<php? echo $row[content]; ?><tr>
留言时间:<php? echo $row[lastdate]; ?>;
<php?
}
?>
</body>
</html>
