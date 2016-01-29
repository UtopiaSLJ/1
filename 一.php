<html>
 <body>
  <head>
     <title>留言板</title>
  </head>
  <body  ><H1 ALIGN=CENTER>留言小屋</H1> <hr>
    <form  name="form1"action="二.php" method="post">
              留言吧：<hr><input type="text" name="concent"><br>
              <input type="submit" value="提交">

     </form>
     <?php
$host=SAE_MYSQL_HOST_M SAE_MYSQL_PORT 
$user_name=SAE_MYSQL_USER
$password=SAE_MYSQL_PASS
$conn = mysql_connect($host,$user_name,$password);
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}
   echo  'Could connect! ';
mysql_select_db("app_shilijundiyigephp");
$sql ='select id,concent';
$result = mysql_query($sql);
while($row=mysql_fetch_array(result,MYSQL_ASSOC））
{
print_r($row);
}

mysql_close($conn);
?>
 </body>
</html>
