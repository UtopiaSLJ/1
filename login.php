<?php
inclde'login_auth.php';
session_start();
if(isset($_POST['user'])&&isset($_POST['password']))
{$user=$_POST['user'];
 $password=$_POST['password'];
 $password=md5($passwod);
 if($user !=$AUTH['user']||$password !=$AUTH['PASSWORD'])
{echo'<strong><font >用户名或密码错误；';}
 else{
     $_SESSION['user']=$user;
     header("loation:guanli.php");
  }
}
?>

<html>
 <body>
  <head>
     <title>管理员登录</title>
  </head>
  <body  ><H1 ALIGN=CENTER>管理员登录</H1> <hr>

    <form  name="form1"action="login.php" method="post">
             
             管理名： <input type="text" name="user" size=15><br>
             密码：<input type="password" name="password" size=15><br>
                        
              <input type="submit" value="提交">

     </form>
      
      </body>
    </html>
