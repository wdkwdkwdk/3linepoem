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
<?php
require("../conn.php");
$result = mysql_query("SELECT * FROM poemlike WHERE id = '$id'");
$poem = mysql_fetch_array($result);
//print_r($poem);
$likenumber = $poem[likenumber];
if($likenumber==NULL)
{

      $likenumber = 0;
      include "../conn.php";
      $insert_sql = "INSERT INTO poemlike(id,likenumber) VALUES";
      $insert_sql .= "('$id','$likenumber')";
      $result = mysql_query($insert_sql);
      //print_r($result);


}
?>
<center>

<!-- JiaThis Button BEGIN -->
<div class="jiathis_style" style="padding-left:40%;">
  <a class="jiathis_like_tsina" data="width=120"></a>
  <a class="jiathis_like_qzone"></a>
</div>
<script type="text/javascript">
var jiathis_config = {data_track_clickback:'true'};
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js?uid=1769785" charset="utf-8"></script>
<!-- JiaThis Button END -->
  </center>
<br><br>
<span class="label label-default"><?php echo $line1?></span><br><br>
<span class="label label-default"><?php echo $line2?></span><br><br>
<span class="label label-default"><?php echo $line3?></span>
</center>
</span>

<br><br><br><br><br><hr>
<!-- UY BEGIN -->
<div id="uyan_frame" style="padding-left:30%;"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1769785"></script>
<!-- UY END -->
<?php
include "foot.php";
?>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"16"},"slide":{"type":"slide","bdImg":"3","bdPos":"right","bdTop":"97.5"},"image":{"viewList":["qzone","tsina","tqq","renren","t163"],"viewText":"分享到：","viewSize":"24"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":false}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86326610.js?cdnversion='+~(-new Date()/36e5)];</script>
</html>
