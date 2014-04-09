<?php
$name = $_COOKIE['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心|三行诗
<style type="text/css">
<!--
.STYLE1 {
	font-family: "微软雅黑";
	font-size: 24px;
}
-->
</style>
</title>
<style type="text/css">
<!--
.STYLE5 {font-family: "微软雅黑"}
.STYLE6 {
	font-size: 10px;
	font-family: "Courier New", Courier, monospace;
}
.STYLE8 {font-family: "微软雅黑"; color: #FF0000; }
-->
</style>
<style>
.link1{
color:#FFFFFF;
}
.link2{
color:#FFFFFF;
}
.link3{
color:#000000;
}
.link4{
color:#666666;
}



body { font-family:Verdana; font-size:14px; margin:0;}

#container {margin:0 auto; width:100%;}
#header { height:40px; background:#0099FF;}
#mainContent { height:auto; background:#EEEEEE;}
#footer { height:30px; background:#9c6;}
</style>
</head>

<body>
<div id="container">
  <div class="STYLE1" id="header">
    <table width="100%"  height="40" border="0">
      <tr>
        <td><span class="STYLE8"><a href="http://www.3linepoem.com" class="link2">三行诗<span class="STYLE6">3linepoem</span></a></span></td>
	 <td><span class="link1">欢迎使用三行诗,<?php echo $name; ?> </span></td>
        <td><a href="write.php" class="link1"><span class="STYLE5">写一首</a></td>
        <td><span class="STYLE5"><a href="http://www.3linepoem.com/picview/all.php" class="link1">发现</a></span></td>
		<td><span class="STYLE5">         </span></td>
        <right><td><span class="STYLE5"><a href="http://www.3linepoem.com/out.php" class="link1">退出</a></span></td>
        </right>
		
      </tr>
    </table>
  </div>
  <div id="mainContent">
  <div style="border-right:1px dashed #000;"></div>
  <?php
require("./conn.php");
$result = mysql_query("SELECT * FROM poem WHERE name = '$name' ORDER BY id DESC ");

while($poem = mysql_fetch_array($result))
{
					
					//echo "<center><div style=\"margin:0;padding:0; width:580px;height:1px;background-color:#303030;overflow:hidden;\"></div></center>";
					echo "<br>";
					echo "<br>";
					$url=$poem[url];
					$title=$poem[title];
					$page="picview/picview.php?id=".$poem[id];
					$time=$poem[time];
      				$time=date("Y-m-d H:i", $time);
					
					echo "<center><span class=\"STYLE5\">您于".$time."发表了 <a href=\"".$page."\" target=\"_blank\">".$title."</a></span></center>";
					
					echo "<br>";
					echo "<br>";
					echo "<center><div style=\"margin:0;padding:0; width:580px;height:1px;background-color:#303030;overflow:hidden;\"></div></center>";
					//echo "<li><a href=\"".$page."\"><img src=\"".$url."\" border=\"0\"/></a></li></div>";
}


?>
<br>
<br>
<center><span class="STYLE5"><a href="write.php" class="link3">再写一首？</a></span>
</center>
<br>
<center><div style="margin:0;padding:0; width:580px;height:1px;background-color:#303030;overflow:hidden;"></div></center>
<br>
  </div>
  <div id="footer">Tips:<span class="STYLE5">写完后将光标移在图片上，即可分享给朋友</span></div>
</div>
<div align="center">
  <p class="STYLE5"><a href="http://www.3linepoem.com/aboutus.html" target="_blank" class="link4">关于我们</a>|<a href="http://www.3linepoem.com/aboutus.html#b33" target="_blank" class="link4">联系我们</a></p>
  <p>Copyright ©2013 3linepoem, All Rights Reserved
  </p>
</div>
</body>
</html>
