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
<a href="zhuye.php">zhuye</a> | <a href="liuyan.php">liuyan</a>
<p>

留言内容:<php? echo $row[content]; ?><tr>
留言时间:<php? echo $row[lastdate]; ?>;
<php?
}
?>
</body>
</html>
