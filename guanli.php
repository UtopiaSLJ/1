<php?
 include("conn.php")
  $sql ='select* from message' ORDER BY 'id' DESC"; 
  $result = mysql_query($sql);
  while($row=mysql_fetch_array($resule))
{
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<h1>留言本</h1>
<a href="zhuye.php">主页</a> | <a href="liuyan.php">继续留言</a>
<p>

留言内容:<php? echo $row[content]; ?><tr>
留言时间:<php? echo $row[lastdate]; ?>;

<php?
}
?>
  <a href="del.php?id=<?=$row[0]?>">[删除]</a>  
</body>
</html>
