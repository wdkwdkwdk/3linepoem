<meta charset='utf-8'>
<?php
include "360safe/360webscan.php";
include "user/check.php";
$pic=$_GET["pic"];
$line1=$_GET["line1"];
$line2=$_GET["line2"];
$line3=$_GET["line3"];
$title=$_GET["title"];
$color=$_GET["color"];
$name1=base64_decode($_COOKIE['user']);
if($submit=="delete")
{
	 echo "<a href=\"http://www.3linepoem.com\">";
	 exit;
}
if($name1==NULL)
{
	 echo "<a href=\"http://www.3linepoem.com\">";
	 exit;
}



$time=time();

require("conn.php");
$createtime = time();
$insert_sql = "INSERT INTO poem(line1,line2,line3,url,title,name,time,openid) VALUES";
$insert_sql .= "('$line1','$line2','$line3','$pic','$title','$name1','$time','$openid')";
if(mysql_query($insert_sql)){
} else {
	echo '添加失败：',mysql_error(),'[ <a href="javascript:history.back()">返 回</a> ]';
}

require("./conn.php");
$result = mysql_query("SELECT id FROM poem WHERE url = '$pic'");
$poem = mysql_fetch_array($result);
$page="/user/story.php?id=".$poem[id];



if($checkbox=="qq")
{
	
	/*$web = "http://50r.cn/short_url.json?url=http://www.3linepoem.com".$page;
	$web  = file_get_contents($web);
	$web = json_decode($web);
	$u = $web[url];*/
	$u = "http://www.3linepoem.com".$page;
	$u = urlencode($u);
	
	$openid=$_COOKIE['openid'];
	$takenid=$_COOKIE['takenid'];
	$appid = "100451935";
  $post_string = "&access_token=".$takenid."&oauth_consumer_key=100451935&openid=".$openid."&title=".$title."&url=".$u."&comment=".$name1."刚写了一首很棒的#三行诗#，来看看吧&summary=".$line1."/".$line2."/".$line3."&images=".$pic."&site=三行诗&fromurl=".$u;
	//$post_string = urlencode($post_string);
	
$remote_server = "https://graph.qq.com/share/add_share";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $remote_server);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'mypost=' . $post_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Jimmy's CURL Example beta");
    $data = curl_exec($ch);
    curl_close($ch);
}


echo "<script>location.href='".$page."'</script>";
?>

