<?php
error_reporting(1);
$title = "个人设置|三行诗";
include "check.php";
include "head.php";
include "conn.php";
$username = base64_decode($_COOKIE['user']);
$result = mysql_query("SELECT * FROM dearuser WHERE name = '$username'");
$mail = mysql_fetch_array($result);
$email = $mail[email];

$dkname = $mail[name];
$id = $mail[id];
?>
   <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>
<div style="margin:5px 80px 20px 200px;width:800px;">

  <div class="container">
<div class="page-header">
  <h1>个人中心<small>LongMail</small></h1>
</div>
<br>

	</div>

<div style="margin:5px 80px 20px 50px;width:200px;">
	 <form class="form-signin" role="form" method="post" action="">
        昵称：<input type="text" class="form-control" placeholder="昵称" name="name" value="<?php echo $username; ?>" required>
        电子邮件：<input type="email" class="form-control" placeholder="电子邮件地址" name="email" value="<?php echo $email; ?>" required>
        旧密码：<input type="password" class="form-control" placeholder="旧密码" name="oldpass"  required>
        新密码：<input type="password" class="form-control" placeholder="新密码" name="pass"  required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">更新吧</button>
      </form>
  </div>
  <?php
if($_POST[oldpass]==NULL)
{
	exit;
}
else
{
	$oldpass = $_POST['oldpass'];
	$oldpass = md5($oldpass);
	$newpass = md5($_POST['pass']);
	$name = $_POST['name'];
	$email = $_POST['email'];
	if($oldpass==$mail[pass])
	{
		
		$namet = $name."lovewdk";
		$emailt = $email."lovewdk";

		include "conn.php";
		mysql_query("UPDATE dearuser SET name = '$namet',email = '$emailt' WHERE id = '$id' ");

		//验证
		$results = mysql_query("SELECT * FROM dearuser WHERE name = '$name'");
    	$nameav = mysql_fetch_array($results);
    	if($nameav!=NULL)
   		 {
       		echo "此用户名已存在！";
       		include "conn.php";
			mysql_query("UPDATE dearuser SET name = '$name',email = '$email' WHERE id = '$id' ");
       		exit;
    	}

    	$results = mysql_query("SELECT * FROM dearuser WHERE email = '$email'");
    	$nameav = mysql_fetch_array($results);
    	if($nameav!=NULL)
    		{
      		 echo "此邮箱已存在！";
      		 include "conn.php";
			mysql_query("UPDATE dearuser SET name = '$name',email = '$email' WHERE id = '$id' ");
      		 exit;
    		}




		include "conn.php";
		mysql_query("UPDATE dearuser SET pass = '$newpass',name = '$name' ,email = '$email' WHERE id = '$id' ");
		mysql_query("UPDATE mail SET touser = '$name' WHERE touser = '$dkname' ");
		mysql_query("UPDATE mail SET fromusers = '$name' WHERE fromusers = '$dkname' ");
		echo "更改成功，系统缓存，需重新登陆菜单才会改变~,<a href=\"out.php\">点此退出并重新登陆</a>";
		exit;
	}
	else
	{
		echo "旧密码不对~";
		exit;
	}

}
  ?>


