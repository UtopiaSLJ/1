<php?
$conn = mysql_connect($host,$user_name,$password);
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}
   echo  'Could connect! ';
mysql_select_db("app_shilijundiyigephp2");

 $sql ="inset into cotent(id,content)"
mysql_query($sql,$conn);
?>
