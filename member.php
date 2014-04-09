<?php
$name = $_COOKIE['id'];
$openid = $_COOKIE['openid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心|三行诗</title>
<style type="text/css">
<!--
.STYLE1 {
	font-family: "微软雅黑";
	font-size: 24px;
}
-->
</style>
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
#header { height:60px; background:#0099FF;}
#mainContent { height:100%; background-color: #FFFFFF;}
#footer { height:30px; background:#9c6;position:fixed;  _position:absolute;_bottom:expression(eval(document.documentElement.scrollTop));z-index:1000;left:0;bottom:0;}
.STYLE9 {font-size: 18px}
</style>
</head>

<body>
<div id="container">
  <div class="STYLE1" id="header">
    <table width="100%"  height="40" border="0">
      <tr>
        <td><span class="STYLE8"><a href="http://www.3linepoem.com" class="link2">三行诗<span class="STYLE6">3linepoem</span></a></span></td>
	 <td><span class="link1">欢迎使用三行诗,<span class="STYLE9">
	 <?php
	 $head = $_COOKIE['head'];
	 if($head!=NULL)
	 {
	 	echo "<img src=\"http://qzapp.qlogo.cn/qzapp/100451935/3D5788F4E34FAE5E291C60EEB45AAE20/30\" alt=\"头像\" width=\"30\" height=\"30\" />";
	 }
	 ?>
	 </span><?php echo $name; ?> <span class="STYLE9">(<a href="changename.html" class="link1">改变昵称</a>) </span></span></td>
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

if($openid!=NULL)
{
	require("./conn.php");
	$result = mysql_query("SELECT * FROM poem WHERE openid = '$openid' ORDER BY id DESC ");
}

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
					
					$head = $_COOKIE['head'];
					echo "<center>";
	 				if($head!=NULL)
					 {
	 					echo "<center><span class=\"STYLE5\"><img src=\"http://qzapp.qlogo.cn/qzapp/100451935/3D5788F4E34FAE5E291C60EEB45AAE20/30\" alt=\"头像\" width=\"30\" height=\"30\" />";
	 				}
					echo "您于".$time."发表了 <a href=\"".$page."\" target=\"_blank\">".$title."</a></span></center>";
					echo "</center>";
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



<div align="center">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
  <p class="STYLE5"><a href="http://www.3linepoem.com/aboutus.html" target="_blank" class="link4">关于我们</a>|<a href="http://www.3linepoem.com/aboutus.html#b33" target="_blank" class="link4">联系我们</a></p>
  <p>Copyright ©2013 3linepoem, All Rights Reserved
  </p>
</div>
</div>
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('6322-773-10-4127');/*]]>*/</script><noscript><a href="https://www.olark.com/site/6322-773-10-4127/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
</body>
</html>