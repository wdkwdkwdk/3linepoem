<?php

function getdomain(){ 
$host=$_SERVER[HTTP_HOST]; 
$host=strtolower($host); 
if(strpos($host,'/')!==false){ 
$parse = @parse_url($host); 
$host = $parse['host']; } 
$topleveldomaindb=array('com','edu','gov','int','mil','net','org','biz','info','pro','name','museum','coop','aero','xxx','idv','mobi','cc','me'); $str=''; 
foreach($topleveldomaindb as $v){ 
$str.=($str ? '|' : '').$v; } 
$matchstr="[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$";
if(preg_match("/".$matchstr."/ies",$host,$matchs)){ 
$domain=$matchs['0']; 
}
else{ 
$domain=$host; 
} 
return $domain; 
}


$title = "邀请朋友|LongMail";
include "head.php";
include "conn.php";
$username = base64_decode($_COOKIE['user']);
	$result = mysql_query("SELECT * FROM dearuser WHERE name = '$username'");
	$mail = mysql_fetch_array($result);
	$id = $mail[id];

$av = 1;

?>
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>

<?php
	$result = mysql_query("SELECT * FROM invite WHERE userid = '$id' AND av = '1'");
	$invite = mysql_fetch_array($result);

	if($invite!=NULL)
	{
		
		
		echo  "<br><br><br><br><center>你上次申请的邀请码还未用过：<span class=\"label label-success\">".$invite[code]."</span></center>";
		exit;
	}

	else
	{
		$code = time().rand(10000,99999);
		$code = md5($code);
		
		$av=1;
		$time = time();
    	include "conn.php";
    	$insert_sql = "INSERT INTO invite(userid,code,email,time,av) VALUES";
    	$insert_sql .= "('$id','$code','0','$time','$av')";
    	$result = mysql_query($insert_sql);
    	echo  "<br><br><br><br><br><center>邀请码：<span class=\"label label-success\">".$code."</span></center>";
	}
?>



