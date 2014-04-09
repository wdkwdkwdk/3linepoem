<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://www.qq.com/404/search_children.js?edition=small" charset="utf-8"></script>
<?php
if($_COOKIE['notice']!=1)
{
    setcookie("notice","1", time()+36000);
    $notice =  "<div class=\"alert alert-success\" style=\"width:400px;\">点击图片随机换一首</div>";

}
else
{
    $notice = " ";
}
?>
<?php
$id=$_GET["id"];
require("../conn.php");
$result = mysql_query("SELECT * FROM poem WHERE id = '$id'");
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

require("../conn.php");
$result = mysql_query("SELECT  id from  poem order by rand() limit 1");  
$number = mysql_fetch_array($result);
$number = $number[0];



$user = base64_decode($_COOKIE['user']);
$ids = base64_decode($_COOKIE['id']);
$session = $_COOKIE['session'];
$s = "thegreatdk";
$add = $user.$ids.$s;

$check = md5($add);
if($check==$session)
{
	include "head.php";
}
else
{
	include "../360safe/360webscan.php";
  $ss = "|<a href=\"http://www.3linepoem.com/\">三行诗</a>";
	echo " <meta charset=\"utf-8\">";
  echo "<title>".$title."|三行诗,不止是三行情书</title>";
     echo "<meta name=\"description\" content=\"".$title."|三行诗,三行情书\">";
    echo "<meta name=\"keywords\" content=\"三行情书,三行诗,诗歌,文艺, ".$title."/>\"";


  echo "<link href=\"../css/bootstrap.css\" rel=\"stylesheet\">";
	echo "<style type=\"text/css\">
   body {
  background-image: url(bg.gif);
  padding-left:8cm;
  padding-right:8cm;
  
  
}

.mll {
  border-radius: 3px;
  padding: 5px;
  font-size: 14px;
  border: 1px solid #ccc;
  display: block;
  width: 650px;
  height: 8em;
  box-shadow: 0pt 1px 2px rgba(0, 0, 0, 0.18) inset;
    overflow-y: auto;
  
}

.mll:focus {
  border: 1px solid rgba(128, 128, 160, 0.6);
  box-shadow: 0pt 1px 2px rgba(0, 0, 0, 0.18) inset, 0px 0px 5px rgba(128, 128, 160, 0.5);
    outline: none;
}
.STYLE1 {
  font-family: \"微软雅黑\";
  font-size: 36px;
  color: #666666;
}
.STYLE2 {
  font-size: 14px;
  color: #CCCCCC;
  font-family: \"微软雅黑\";
  
}
.STYLE4 {font-size: 36px; font-family: \"微软雅黑\";}
.STYLE5 {
  font-size: 14px;
  color: #000000;
}
.STYLE7 {font-family: \"微软雅黑\"}
-->
   body {
  
    padding-top: 70px;
}
body,td,th {
  font-family: 微软雅黑;
  
}

</style>";
	
}
if($session==NULL)
{
	
  $ss = "|<a href=\"http://www.3linepoem.com/\">三行诗</a>";
	echo " <meta charset=\"utf-8\">";
   echo "<link href=\"../css/bootstrap.css\" rel=\"stylesheet\">";
	echo "<style type=\"text/css\">
   body {
  background-image: url(bg.gif);
  padding-left:8cm;
  padding-right:8cm;
  
  
}
.mll {
  border-radius: 3px;
  padding: 5px;
  font-size: 14px;
  border: 1px solid #ccc;
  display: block;
  width: 650px;
  height: 8em;
  box-shadow: 0pt 1px 2px rgba(0, 0, 0, 0.18) inset;
    overflow-y: auto;
  
}

.mll:focus {
  border: 1px solid rgba(128, 128, 160, 0.6);
  box-shadow: 0pt 1px 2px rgba(0, 0, 0, 0.18) inset, 0px 0px 5px rgba(128, 128, 160, 0.5);
    outline: none;
}
.STYLE1 {
  font-family: \"微软雅黑\";
  font-size: 36px;
  color: #666666;
}
.STYLE2 {
  font-size: 14px;
  color: #CCCCCC;
  font-family: \"微软雅黑\";
  
}
.STYLE4 {font-size: 36px; font-family: \"微软雅黑\";}
.STYLE5 {
  font-size: 14px;
  color: #000000;
}
.STYLE7 {font-family: \"微软雅黑\"}
-->
   body {
  
    padding-top: 70px;
}
body,td,th {
  font-family: 微软雅黑;
  
}

</style>";
}




//$number = rand(1,$number);


?>

<body>
    <br><br><br>
<div align="center"><span class="STYLE1"><?php echo $title; ?><?php echo $ss; ?><span class="STYLE2">-</span></span></div><br><br>
<p class="STYLE1" style="text-align:center;"><a href="view.php?id=<?php echo $number; ?>"><img src="<?php echo $url ?>" border="0"  /></a></p>
<br>
<br><center>

<?php
echo $notice;
?>
<center>
  <br>
<button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-heart"></span> 收藏(12)</button>
<button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span> 赞(45)</button>
<button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-share-alt"></span> 分享(14)</button>
  </center>
<br><br>
<span class="label label-default"><?php echo $line1?></span><br><br>
<span class="label label-default"><?php echo $line2?></span><br><br>
<span class="label label-default"><?php echo $line3?></span>
</center>
</span>
<hr>
<div name="Story" style="padding-left:40%;padding-right:10%;">
<?php
require("../conn.php");
$result = mysql_query("SELECT * FROM story WHERE poem = '$id'");
$story = mysql_fetch_array($result);
$story = $story[story];
if($story==NULL)
{
  echo "没有找到这首诗的故事，你是作者？是否<a href=\"story.php?id=".$id."\">写诗背后的故事</a>？";
}
else
{
  echo "<span class=\"label label-info\">".$name."说：</span><br><br>".$story;

}
?>
  
</div>
<br><br><br><br><br><hr>
<!-- UY BEGIN -->
<p>留下评论</p>
<form role="form" method="post" action="send.php"><center>
<textarea id="b" class="mll" name="content" style="height: 100px; width: 60%;"></textarea>
 <p><input type="hidden" name="id" value="<?php echo $_GET["id"]?>"></p>
<button type='submit' class='btn btn-default'>好了</button>
<!-- UY END --></center>
<?php
include "foot.php";
?>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"16"},"slide":{"type":"slide","bdImg":"3","bdPos":"right","bdTop":"97.5"},"image":{"viewList":["qzone","tsina","tqq","renren","t163"],"viewText":"分享到：","viewSize":"24"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":false}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86326610.js?cdnversion='+~(-new Date()/36e5)];</script>
</html>
