<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include("conn.php");


if($_POST['submit']){
   
echo  $sql ="insert into message(id,content)" ." values('','$_POST[content]')";
    mysql_query($sql);
    
}

echo "<p>OK</p>";


?>
<p><a href="show.php">去留言页 </a></p> 
