<?php
error_reporting(1);
$title = "发送完毕|LongMail";
include "head.php";
$type = $_GET['type'];
$name = $_GET['touser'];
$code = $_GET['code'];
$email = $_GET['email'];
$w = "你好像走错了吧？";
if($type==0)
{
	$w = "您发送的昵称『".$name."』不存在，但是信件已经储存，您可以让你的朋友以此昵称『".$name."』注册，TA就会收到你的信件，<br>别忘了在右上角获取一个邀请码并把邀请码发给TA！";
}

if($type==1)
{
	$w = "发送成功";
}

if($type==2)
{
	$w = "发送成功";
}

if($type==3)
{
	$w = "系统检测到此邮件地址未注册，我们已经给此地址发送了一封电子邮件，TA通过电子邮件中的链接注册即可查看到您写的信息<br>您还可以复制以下链接给TA，通过此链接注册即可查看您的消息";
	$w = $w."<h1>http://xxx.xx.xx/reg.php?c=".$code."&e=".$email."</h1>";
}


?>

<br>

<center><?php echo $w; ?></center>
<br>
<center><a class="btn btn-lg btn-success" href="index.php?look=1" role="button">回到已送出</a></center>




    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>