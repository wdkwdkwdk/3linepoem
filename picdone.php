<?php
    include "360safe/360webscan.php";

$line1=$_POST["line1"];
$line2=$_POST["line2"];
$line3=$_POST["line3"];
$title=$_POST["title"];

$line1 = str_replace("'", "‘", $line1);
$line1 = str_replace(";", "；", $line1);
$line1 = str_replace("%", "/%", $line1);

$line2 = str_replace("'", "‘", $line2);
$line2 = str_replace(";", "；", $line2);
$line2 = str_replace("%", "/%", $line2);

$line3 = str_replace("'", "‘", $line3);
$line3 = str_replace(";", "；", $line3);
$line3 = str_replace("%", "/%", $line3);

$title = str_replace("'", "‘", $title);
$title = str_replace(";", "；", $title);
$title = str_replace("%", "/%", $title);



$username = base64_decode($_COOKIE['user']);
if($line1==NULL)
{
	echo "<script>location.href='http://www.3linepoem.com/'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>选择图片|三行诗</title>
<style>

body {
	font-family: Helvetica Neue, Arial, Helvetica, Geneva, sans-serif;
	font-size: 13px;
	margin: 0px;
}


ul.box {
	width:980px;
	height:auto;
	margin: 10px auto;
	padding: 0;
	clear: both;
	overflow: hidden; 
}

ul.box li {
	list-style-type: none;
	margin:20px 10px;
	padding: 0;
	width: 300px;
	height: 220px;
	border: 2px solid #efefef;
	position: relative;
	float: left;
	background: #ffffff; /* old browsers */
	line-height:220px;
	font-size:32px;
	text-align:center;
	
	
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 60px rgba(0, 0, 0, 0.1) inset;
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 60px rgba(0, 0, 0, 0.1) inset; 
	-o-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 60px rgba(0, 0, 0, 0.1) inset;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 60px rgba(0, 0, 0, 0.1) inset;
	
	behavior: url(ie-css3.htc);
}

ul.box li:before { 
	z-index: -2; 
	position: absolute; 
	background: transparent; 
	width: 90%; 
	height: 80%; 
	content: ''; 
	left: 20px; 
	bottom:8px; 
	
	-webkit-transform: skew(-12deg) rotate(-4deg); 
	-moz-transform:skew(-12deg) rotate(-4deg); 
	-o-transform: skew(-12deg) rotate(-4deg); 
	-ms-transform: skew(-12deg) rotate(-4deg); 
	
	-webkit-box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6); 
	-moz-box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6); 
	-o-box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6); 
	box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6); 
	
	behavior: url(ie-css3.htc);
}



ul.box li:after { 
	z-index: -1; 
	position: absolute; 
	background: transparent; 
	width: 90%; 
	height: 80%; 
	content: ''; 
	right:20px;  
	bottom:8px; 
	
	-webkit-transform: skew(12deg) rotate(4deg); 
	-moz-transform:skew(12deg) rotate(4deg); 
	-o-transform: skew(12deg) rotate(4deg); 
	-ms-transform: skew(12deg) rotate(4deg); 
	
	-webkit-box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6); 
	-moz-box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6); 
	-o-box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6); 
	box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6); 
	
	behavior: url(ie-css3.htc);

} 

.box li img{
	width:290px;
	height:210px;
	padding:5px;
}

.STYLE1 {
	font-family: "微软雅黑";
	font-size: 24px;
}
.STYLE2 {
	font-size: 18px;
	font-family: "微软雅黑";
}
.STYLE3 {font-size: 24px}
</style>
</head>

<body>



<ul class="box">
  <div class="paper">
    <p align="center" class="STYLE1">请点击选择背景图(最底端有上传通道)</p>
    <li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/1.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/1.jpg" border="0"/></a></li></div>
	
  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/2.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/2.jpg" border="0"/></a></li></div>
  
  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/3.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/3.jpg" border="0"/></a></li></div>
  
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/4.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/4.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/5.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/5.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/6.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/6.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/7.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/7.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/8.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/8.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/9.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/9.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/10.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/10.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/11.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/11.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/12.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/12.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/13.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/13.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/14.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/14.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/15.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/15.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/16.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/16.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/17.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/17.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/18.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/18.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/19.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/19.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/20.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/20.jpg" border="0"/></a></li></div>




 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/21.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/21.jpg" border="0"/></a></li></div>
 
  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/22.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/22.jpg" border="0"/></a></li></div>
  
  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/23.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/23.jpg" border="0"/></a></li></div>
  
  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/24.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/24.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/25.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/25.jpg" border="0"/></a></li></div>
 
  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/26.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/26.jpg" border="0"/></a></li></div>
   
   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/27.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/27.jpg" border="0"/></a></li></div>
   
   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/28.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/28.jpg" border="0"/></a></li></div>

 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/29.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/29.jpg" border="0"/></a></li></div>

 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/30.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/30.jpg" border="0"/></a></li></div>
 
  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/31.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/31.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/32.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/32.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/33.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/33.jpg" border="0"/></a></li></div>

<div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/34.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/34.jpg" border="0"/></a></li></div>
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/35.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/35.jpg" border="0"/></a></li></div> 
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/36.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/36.jpg" border="0"/></a></li></div>
   
   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/37.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/37.jpg" border="0"/></a></li></div> 
   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/38.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/38.jpg" border="0"/></a></li></div> 
   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/39.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/39.jpg" border="0"/></a></li></div>
	   
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/40.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/40.jpg" border="0"/></a></li></div> 
 
 <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/41.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/41.jpg" border="0"/></a></li></div>
   
   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/42.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/42.jpg" border="0"/></a></li></div> 
   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/43.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/43.jpg" border="0"/></a></li></div> 
   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/44.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/44.jpg" border="0"/></a></li></div>
	  
	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/45.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/45.jpg" border="0"/></a></li></div>
	  

  
<!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa--> 

 	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/46.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/46.jpg" border="0"/></a></li></div>
	  
	  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/47.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/47.jpg" border="0"/></a></li></div>
		  
		  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/48.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/48.jpg" border="0"/></a></li></div>
			  
			  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/49.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/49.jpg" border="0"/></a></li></div>
				  
				  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/50.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/50.jpg" border="0"/></a></li></div>
					  
					  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/51.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/51.jpg" border="0"/></a></li></div>
						  
						  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/52.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/52.jpg" border="0"/></a></li></div>
							  
							  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/53.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/53.jpg" border="0"/></a></li></div>
								  
								  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/54.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/54.jpg" border="0"/></a></li></div>
									  
									  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/55.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/55.jpg" border="0"/></a></li></div>
										  
										  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/56.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/56.jpg" border="0"/></a></li></div>
	  
	  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/57.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/57.jpg" border="0"/></a></li></div>
		  
		  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/58.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/58.jpg" border="0"/></a></li></div>
			  
			  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/59.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/59.jpg" border="0"/></a></li></div>
				  
				  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/60.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/60.jpg" border="0"/></a></li></div>
					  
					  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/61.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/61.jpg" border="0"/></a></li></div>
						  
						  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/62.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/62.jpg" border="0"/></a></li></div>
							  
							  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/63.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/63.jpg" border="0"/></a></li></div>
								  
								  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://www.3linepoem.com/images/bg/64.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/64.jpg" border="0"/></a></li></div>
									  
									  	  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://www.3linepoem.com/images/bg/65.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>"><img src="images/bg/65.jpg" border="0"/></a></li></div>
										  
										   <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=white&pic=http://wdkweixintest-test.stor.sinaapp.com/black.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>">纯黑背景</a></li></div>
 
  <div class="paper"><li><a href="http://3linepoem.sinaapp.com/wdk.php?username=<?php echo $username; ?>&color=black&pic=http://wdkweixintest-test.stor.sinaapp.com/TT%E6%88%AA%E5%9B%BE%E6%9C%AA%E5%91%BD%E5%90%8D.jpg&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>">纯白背景</a></li></div>
 
</ul>

<p align="center" class="STYLE2"><span class="STYLE3">不满意？ <a href="http://1.3linepoem.sinaapp.com/picup.php?username=<?php echo $username; ?>&line1=<?php echo $line1; ?>&line2=<?php echo $line2; ?>&line3=<?php echo $line3; ?>&title=<?php echo $title; ?>">上传背景图片</a></span></p>
<p></p>
<!--广告区域结束--> 
</body>
</html>
