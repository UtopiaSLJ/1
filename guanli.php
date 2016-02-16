<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>

<body>
<h1>留言本</h1>
    <a href="zhuye.php">主页</a> | <a href="liuyan.php">留言</a>
<?php
 include("conn.php");
  $sql ="select * from message ORDER BY 'id' DESC";
  $result = mysql_query($sql);
  while($row=mysql_fetch_array($result))
{
?>


<p>

留言内容:<?php echo $row['content']; ?><tr><p>
留言时间:<?php echo $row['lastdate']; ?>;
<a href="del.php?id=<?=$row[0]?>">[删除]</a> 
   <hr> 
    
  <?php
}
?>

</body>
</html>
