<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$openid=$_COOKIE['openid'];
$takenid=$_COOKIE['takenid'];
$appid = "100451935";

$tu = "https://graph.qq.com/user/get_user_info?oauth_consumer_key=".$appid."&access_token=".$takenid."&openid=".$openid."&format=json";
$u  = file_get_contents($tu);

$u = json_decode($u,true);

//print_r($u);
//exit;

//echo $u[ret];
$name = $u[nickname];
$head = $u[figureurl];
setcookie('head',$head,time()+3600*24*10);
//echo $openid;
  
require("conn.php");
$result = mysql_query("SELECT name FROM user WHERE openid = '$openid'");
$user = mysql_fetch_array($result);
$username = $user[name];
if($user!=NULL)
{
  setcookie('id',$username,time()+3600*24*10);
  echo "<script>location.href='http://3linepoem.sinaapp.com/logintest.php?name=".$name."'</script>";
  exit;
}
  setcookie('id',$u[nickname],time()+3600*24*10);
	require("conn.php");
	$insert_sql = "INSERT INTO user(openid,name) VALUES";
	$insert_sql .= "('$openid','$name')";
 	
	if(mysql_query($insert_sql)){
		} else {
			
      				echo '添加失败：',mysql_error(),'[ <a href="javascript:history.back()">返 回</a> ]';
		}



echo "<script>location.href='http://3linepoem.sinaapp.com/logintest.php?name=".$name."'</script>";




?>
