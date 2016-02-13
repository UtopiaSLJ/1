<?
$host=SAE_MYSQL_HOST_M SAE_MYSQL_PORT; 
$user_name=SAE_MYSQL_USER;
$password=SAE_MYSQL_PASS;
  $mysql_database    = "content";
  $sql = "DELETE FROM content WHERE id = '$id' "; 
  $conn = mysql_connect($mysql_server_name,$mysql_username,$mysql_password);
  mysql_select_db($mysql_database,$conn);
  $result = mysql_query($sql,$conn);
  mysql_close($conn); 
?>

