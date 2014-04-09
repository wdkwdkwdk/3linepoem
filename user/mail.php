<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>写长信</title>

 <style type="text/css">
   body {
  min-height: 500px;
  padding-top: 70px;
}
.STYLE1 {color: #FF0000}
.STYLE3 {color: #009900}
</style>

<script src="http://imperavi.com/js/jquery-2.0.3.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
 

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
                 <a class="navbar-brand" href="/LongMail/index.php">LongMail-写长信</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            

           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">我<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../user/index.php">我收到的</a></li>
                <li><a href="../user/index.php?look=1">我送出的</a></li>
              </ul>
            </li>
            

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">写<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../user/mail.php">写长信</a></li>
                <li><a href="#">写长文(暂未开放)</a></li>
              </ul>
            </li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">官方 <b class="caret"></b></a>
              <ul class="dropdown-menu">
               <li><a href="us.php#use">使用须知</a></li>
                <li><a href="us.php#more">关于我们</a></li>
                <li><a href="us.php#about">更多</a></li>
              </ul>
            </li>
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo base64_decode($_COOKIE['user']); ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="setting.php">账户设置</a></li>
                <li><a href="invite.php">邀请朋友</a></li>
                <li><a href="out.php">登出</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<?php 
include "check.php";
?>
<div class="container">
<div class="page-header">
  <h1>写信<small>some words</small></h1>
</div>
<form role="form" method="post" action="send.php">

<div class="row">
  <div class="col-md-8">
<div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写收信人邮箱地址或LongMail昵称" name="touser" value="<?php echo $_GET['touser']; ?>" required>
  </div>
  </div>
  <div class="col-md-4">
<span class="label label-success">填写收信人邮箱地址或LongMail昵称</span>
  </div>
</div>

  
<div class="row">
  <div class="col-md-8">
<div class="form-group">
   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="信件标题" name="lettertitle">
  </div>
  </div>
  <div class="col-md-4">
<span class="label label-success">填写信件标题（可不填）</span>
  </div>
</div>



   <textarea id="b" name="content" style="height: 200px; width: 100%;">
	  </textarea>
<div><span id="a"></span></div>
<br>
 <div class="col-xs-3">
 	
    <div class="input-group">
      <a href="#" title="这是什么？"><span class="glyphicon glyphicon-question-sign" titile="这是什么？"></a></span><span class="input-group-addon">
       是否阅后即焚 <input type="checkbox" name="ch" value="dk">
      </span>
      <input type="text" class="form-control" placeholder="输入次数" name="times">
    </div><!-- /input-group --><br>
     <div id="bu"><button type="submit" class="btn btn-default" disabled="disabled">还未达到140字~不能发送</button></div>
 </div>

<br>
<br>
</form>



</div>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>

<script language="javascript">
<!--
var maxl=140//总长
document.onkeydown=function(){
   var s=document.getElementById("b").value.length +1;
   if(s<maxl)document.getElementById("a").innerHTML="<span class='STYLE1'>整页输入统计："+s+" 字,还差"+(maxl-s)+"字</span>"
   else 
    {
      document.getElementById("a").innerHTML="<span class='STYLE3'>恭喜你，已经超过140字</span>";
      document.getElementById("bu").innerHTML="<button type='submit' class='btn btn-default'>发送</button>";
    }
}
function cha(){
var txt=document.getElementById("b").value,tl=txt.length;
var txtArray=[],k=(tl/ppl<=1)?1:Math.ceil(tl/ppl);
for (var i=0;i<k;i++){
txtArray[i]=txt.substr(i*ppl,ppl);
alert(txtArray[i]) ;
}
document.getElementById("b").value=""
document.getElementById("a").innerHTML="整页输入统计"
}
//-->
</script>