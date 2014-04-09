<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>三行诗</title>
<style type="text/css">
<!--
.STYLE1 {
	font-family: "微软雅黑";
	font-size: 24px;
}
.STYLE2 {font-family: "微软雅黑"}
-->
</style>
</head>
<?php
	require("./conn.php");
	$result = mysql_query("SELECT  id from  poem order by rand() limit 1");  
	$number = mysql_fetch_array($result);
	$p1number = $number[0];
	
	require("./conn.php");
$result = mysql_query("SELECT * FROM poem WHERE id = '$p1number'");
$poem = mysql_fetch_array($result);
$title = $poem[title];
if($title==NULL)
{
	 echo "<script>location.href='http://www.3linepoem.com'</script>";
}
$url = $poem[url];
$line1 = $poem[line1];
$line2 = $poem[line2];
$line3 = $poem[line3];
$name = $poem[name];

//2nd
	require("./conn.php");
	$result = mysql_query("SELECT  id from  poem order by rand() limit 1");  
	$number = mysql_fetch_array($result);
	$p2number = $number[0];
	
	require("./conn.php");
$result = mysql_query("SELECT * FROM poem WHERE id = '$p2number'");
$poem = mysql_fetch_array($result);
$p2title = $poem[title];
if($title==NULL)
{
	 echo "<script>location.href='http://www.3linepoem.com'</script>";
}
$p2title = $poem[title];
$p2url = $poem[url];
$p2line1 = $poem[line1];
$p2line2 = $poem[line2];
$p2line3 = $poem[line3];
$p2name = $poem[name];
//3rd
	require("./conn.php");
	$result = mysql_query("SELECT  id from  poem order by rand() limit 1");  
	$number = mysql_fetch_array($result);
	$p3number = $number[0];
	
	require("./conn.php");
$result = mysql_query("SELECT * FROM poem WHERE id = '$p3number'");
$poem = mysql_fetch_array($result);
$p3title = $poem[title];
if($title==NULL)
{
	 echo "<script>location.href='http://www.3linepoem.com'</script>";
}
$p3title = $poem[title];
$p3url = $poem[url];
$p3line1 = $poem[line1];
$p3line2 = $poem[line2];
$p3line3 = $poem[line3];
$p3name = $poem[name];
?>
<body>
			<div class="page-header">
				<h1>
					三行诗 <small>像写心情一样写诗</small>
				</h1>
			</div>
					 <?php 
		  $app_id = "100451935";
  			//应用的APPKEY
 			 $app_secret = "13a5eef795385dbc41d61e76cba82f0f";
  			//成功授权后的回调地址
  			$my_url = "http://www.3linepoem.com/test.php";
			
			 session_start();
  $code = $_REQUEST["code"];
			$_SESSION['state'] = md5(uniqid(rand(), TRUE)); 
     //拼接URL     
     $dialog_url = "https://graph.qq.com/oauth2.0/authorize?response_type=code&scope=get_user_info,add_share&client_id=" 
        . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
        . $_SESSION['state'];
		 ?>
			
			<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			 <left><button class="btn" type="button"><a href="<?php echo $dialog_url; ?>">创作登陆</a></button><br><span class="STYLE2">三行诗是一个有爱的小站，你可以在这里创作，分享和阅读三行诗。首先，从上方的『创作登陆』开始吧! </left></span>
			 <hr>
		</div>
	</div>
</div>		
			<br>
			<center>
			
			<ul class="thumbnails">
			
				<li class="span4">
					<div class="thumbnail">
						<img alt="噢，这张图挂了，太桑感了~" src="<?php echo $url ?>" width="300" height="200" />
						<div class="caption">
							<h3>
								<?php echo $title; ?>
							</h3>
							<p>
								<?php echo $line1; ?><br><?php echo $line2; ?> <br><?php echo $line3; ?>
							</p>
							<p>
								<a class="btn btn-primary" href="picview/picview.php?id=<?php echo $p1number; ?>">浏览</a> <a class="btn" href="picview/picview.php?id=<?php echo $p1number; ?>">分享</a>
							</p>
						</div>
					</div>
				</li>
				
				<li class="span4">
					<div class="thumbnail">
						<img alt="噢，这张图挂了，太桑感了~" src="<?php echo $p2url ?>"  width="300" height="200"/>
						<div class="caption">
							<h3>
								<?php echo $p2title; ?>
							</h3>
							<p>
								<?php echo $p2line1; ?><br><?php echo $p2line2; ?> <br><?php echo $p2line3; ?>
							</p>
							<p>
								<a class="btn btn-primary" href="picview/picview.php?id=<?php echo $p2number; ?>">浏览</a> <a class="btn" href="picview/picview.php?id=<?php echo $p2number; ?>">分享</a>
							</p>
						</div>
					</div>
				</li>
				
				<li class="span4">
					<div class="thumbnail">
						<img alt="噢，这张图挂了，太桑感了~" src="<?php echo $p3url ?>"  width="300" height="200"/>
						<div class="caption">
							<h3>
								<?php echo $p3title; ?>
							</h3>
							<p>
								<?php echo $p3line1; ?><br><?php echo $p3line2; ?> <br><?php echo $p3line3; ?>
							</p>
							<p>
								<a class="btn btn-primary" href="picview/picview.php?id=<?php echo $p3number; ?>">浏览</a> <a class="btn" href="picview/picview.php?id=<?php echo $p3number; ?>">分享</a>
							</p>
						</div>
					</div>
				</li>
			</ul>
			
	</center>
	<hr>
			<span class="STYLE1">阅读更多...
		    </div>
	<hr>
	<br>
	<span class="STYLE2"><center>Copyright ©2013 3linepoem, All Rights Reserved<center></span>
	        </div>
            </div>

            <script src="http://code.jquery.com/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            </span>
</body>
</html>
