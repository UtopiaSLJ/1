<?php

include("conn.php");


if($_POST['submit']){

echo  $sql ="inset into massage(id,content,lastdate)" . values('','$_POST[content]',now());
      mysql_query($sql);

}

echo "<p>OK</p>";


?>
<p><a href="show.php">去留言页 </a></p>         
