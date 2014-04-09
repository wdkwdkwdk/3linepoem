<?php 
$name=$_COOKIE['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="三行诗,诗歌" />
<meta name="description" content="三行诗的诗人页面" />
<title>欢迎使用三行诗，<?php echo $name; ?></title> 
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) { var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",mirage:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/v=2965651658/"},atok:"d39e5d5183aed41b1df6a8646d8149fd",zone:"alessioatzeni.com",rocket:"0",apps:{"dnschanger_detector":{"fix_url":null}}}];document.write('<script type="text/javascript" src="images/jquery.min.js"><'+'\/script>')}}catch(a){};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
window.__CF=window.__CF||{};window.__CF.AJS={"dnschanger_detector":{"fix_url":null}};
//]]>
</script>
<link rel="stylesheet" href="images/main.css" type="text/css"/>
<script src="images/jquery.min.js" type="text/javascript"></script>
<script>		
$(document).ready(function() {
    var content = $('.content');
	
    $('#trigger').live('click', function() {
        $(this).toggle(function() {
            $(this).text('点击隐藏!');
            content.removeClass('reverse').addClass('running');
        }, function() {
             $(this).text('follow me!');
            content.removeClass('running').addClass('reverse');
        }).trigger('click');
    });
	
});
</script>
<link rel="canonical" href="#" />
</head>
<body>
<h1>欢迎使用三行诗，<?php echo $name; ?></h1>
<div class="container">
	<div class="content">
    	<div class="ID-Image">
        	
        	<ul id="follow">
          
            	<li class="line1">
                <span id="layerBall" class="ball">LINKED IN</span><span id="layerPulse" class="pulse"></span>                </li>
                
            	
                <li class="line2">
                <span id="layerBall1" class="ball1">FOORST</span><span id="layerPulse1" class="pulse1"></span>                </li>
            	
                <li class="line3">
                <span id="layerBall2" class="ball2">TWITTER</span><span id="layerPulse2" class="pulse2"></span>                </li>
            	
                <li class="line4">
                <span id="layerBall3" class="ball3">FACEBOOK</span><span id="layerPulse3" class="pulse3"></span>                </li>
            </ul>
            
            <ul id="social">
            <li id="layerSocialControl3" class="facebook"><a href="http://www.3linepoem.com.com/">网站首页</a></li>
            <li id="layerSocialControl2" class="twitter"><a href="http://www.3linepoem.com/picview/index.php?name=<?php echo $name; ?>">我的诗</a></li>
            <li id="layerSocialControl" class="linked"><a href="http://www.3linepoem.com/picview/all.php">发现</a></li>
			<li id="layerSocialControl1" class="forrst"><a href="http://www.3linepoem.com/aboutus.html">关于三行诗</a></li>
            </ul>
        </div>
        
        <a id="trigger" href="#">点击这里!</a>    </div>
</div>
<p style="text-align:center;">&nbsp;</p>
<p></p> 
</body>
</html>
