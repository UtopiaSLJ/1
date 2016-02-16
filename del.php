<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
 $id=$_GET['id'];
 $conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);

  mysql_select_db(app_shilijundiyigephp,$conn); 
 $sql = "DELETE FROM message WHERE id = '$id' "; 
  
  mysql_query($sql);
  mysql_close($conn); 
?>
<a href="guanli.php">[返回]</a>






