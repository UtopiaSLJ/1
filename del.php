<?
$host=SAE_MYSQL_HOST_M SAE_MYSQL_PORT; 
$user_name=SAE_MYSQL_USER;
$password=SAE_MYSQL_PASS;
 $mysql_database    = "massage";
  $sql = "DELETE FROM massage WHERE id = '$id' "; 
   $conn = mysql_connect($mysql_server_name,$mysql_username,$mysql_password);
  mysql_select_db($mysql_database,$conn);
  $result = mysql_query($sql);
  mysql_close($conn); 
?>
<p><a href="show.php">[返回]</a></p>


