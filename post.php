<?php
$host=SAE_MYSQL_HOST_M SAE_MYSQL_PORT; 
$user_name=SAE_MYSQL_USER;
$password=SAE_MYSQL_PASS;
$concent=$_post['concent'];
$conn = mysql_connect($host,$user_name,$password);
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}
   echo  'Could connect! ';
mysql_select_db("app_shilijundiyigephp2");

if($_post['submit']){

echo  $sql ="inset into cotent(id,content)"}
mysql_query($sql,$conn);
mysql_close($conn);
?>
<p>留言成功</p>
<p><a href="show.php">去留言页 </a></p>
