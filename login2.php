<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<SCRIPT language=javascript>

 
</SCRIPT>
<?php
 

if( isset($_POST['passwd']))
{
 
 $passwd=$_POST['passwd'];
 $passwd=md5($passwd);
 
 if($passwd!='95192c98732387165bf8e396c0f2dad2')
 {echo'<strong><font >密码错误；</font ></strong>';}
 
 else{
     
    echo "<script>location.href='guanli.php';</script>";
  }
}
?>



<html>
 <body>
  <head>
     <title>管理员登录</title>
  </head>
  <body  ><H1 ALIGN=CENTER>管理员登录</H1> <hr>

    <form  name="form1"action="login2.php" method="post">
             
           
             密码：<input type="password" name="passwd" >2016<br>
                        
              <input type="submit" value="提交">

     </form>
      
      </body>
    </html>
