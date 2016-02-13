
<php?
include("conn.php");
$sql = "select * from content where id=".$_GET["id"];
$resule = mysql_query($sql,$conn);
SetCookie("id",$_GET["id"],0);
?>
