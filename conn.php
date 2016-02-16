
<?php
$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}
   echo  ' ';
mysql_select_db(app_shilijundiyigephp);

 //$sql ="insert into message(id,content)"
//mysql_query($sql,$conn);
?>
