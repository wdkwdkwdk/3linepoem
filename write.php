<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<?php
include"user/check.php";

    $name = base64_decode($_COOKIE['user']);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创作.三行诗</title>




<style type="text/css">
html{
height: 100%;
}
body{
	width: 80%;
	height: 100%;
	overflow: hidden;
	background: url('http://m3.img.libdd.com/farm4/2012/1021/11/90A49B453AE47D7AA8D76D4988BC088F17BC870F15E90_401_600.JPEG') no-repeat center;
-moz-background-size: cover;
-webkit-background-size: cover;
	background-size: cover;
	
}
</style>
<style type="text/css">
<!-- 
body{ 
background-color:#daeeff;
} 
form{ 
margin:0px; padding:0px; 
} 

.txt{ 
color:#005aa7; 
border:0px; 
border-bottom:1px solid #005aa7; /* 下划线 */ 
background-color:transparent; /* 背景透明 */ 
} 
.btn{ 
background-color:transparent; /* 背景透明 */ 
border:0px; /*border:0px solid #005aa7;取消边框 */ 
cursor:pointer; 
} 
-->
</style>
<style type="text/css" mce_bogus="1">
 body{ 
background-color:#daeeff; /* 页面背景色 */ 
} 
form{ 
margin:0px; padding:0px; 
} 

.txt{ 
color:#CCCCCC; 
border:0px; 
border-bottom:1px solid #FFFFFF; /* 下划线效果 */ 
background-color:transparent; /* 背景色透明 */ 
height:30px;
size:50;
font-size:24px

} 
.btn{ 
background-color:transparent; /* 背景色透明 */ 
border:0px; /*border:0px solid #005aa7;边框取消 */ 
cursor:pointer; 
}.STYLE10 {
	font-family: "微软雅黑";
	color: #CCCCCC;
	
}
.btn1 {background-color:transparent; /* 背景透明 */ 
border:0px; /*border:0px solid #005aa7;取消边框 */ 
cursor:pointer; 
}
.btn1 {background-color:transparent; /* 背景色透明 */ 
border:0px; /*border:0px solid #005aa7;边框取消 */ 
cursor:pointer; 
}
.STYLE11 {
	font-family: "微软雅黑";
	font-size: 54px;
}
.STYLE12 {
	font-family: "微软雅黑";
	font-size: 12px;
}
.STYLE16 {font-family: Arial, Helvetica, sans-serif}
.txt1 {color:#005aa7; 
border:0px; 
border-bottom:1px solid #005aa7; /* 下划线 */ 
background-color:transparent; /* 背景透明 */ 
}
.txt1 {color:#CCCCCC; 
border:0px; 
border-bottom:1px solid #000000; /* 下划线效果 */ 
background-color:transparent; /* 背景色透明 */ 
height:30px;
size:50;
font-size:24px
}
.STYLE17 {color: #FFFFFF}
.STYLE19 {font-family: "微软雅黑"; color: #FFFFFF; }
</style> 
　
</head>
<body>
  <p align="right"><?php echo "<span class=\"STYLE10\">欢迎创作，".$name."</span>"; ?><span class="STYLE10"><a href="http://www.3linepoem.com/out.php">(退出)</a></span></p>
  <p align="center"><span class="STYLE11">创作.<span class="STYLE16">三行诗</span></span><span class="STYLE12"><a href="http://www.3linepoem.com">写你所思，写你所想</a></span></p>
<p align="right">&nbsp;</p>
<center>
<form enctype="multipart/form-data" action="picdone.php" method="post">
  <p><span class="STYLE10">题目：</span>
    <input name="title" type="text" class="txt" id="title" size="10" />
  </p>

  <p>
    <label> 
    <input name="line1" type="text" class="txt" id="line1" size="30" />
    </label>
  </p>
  <p> 
    <input name="line2" type="text" class="txt" id="line2" size="30" />
  </p>
  <p> 
    <input name="line3" type="text" class="txt" id="line3" size="30" />
  </p>
  <p>&nbsp;</p>
  <p>
  <right>
    <label></label>

    <label></label>
    </right>
  <label></label>
  <br>
  
  </p>
  
 
  <p align="right">
    <right></right>
  </p>
  <p align="right" class="STYLE10 STYLE17">&nbsp;</p>
  <p>
    <label>
      <input type="submit" name="Submit" value="最后一步">
      </label>
  </p>
</form>
</center>
</body>
</html>