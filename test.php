<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
  //应用的APPID
  $app_id = "100451935";
  //应用的APPKEY
  $app_secret = "13a5eef795385dbc41d61e76cba82f0f";
  //成功授权后的回调地址
  $my_url = "http://www.3linepoem.com/test.php";

  //Step1：获取Authorization Code
  session_start();
  $code = $_REQUEST["code"];
  if(empty($code)) 
  {
     //state参数用于防止CSRF攻击，成功授权后回调时会原样带回
     $_SESSION['state'] = md5(uniqid(rand(), TRUE)); 
     //拼接URL     
     $dialog_url = "https://graph.qq.com/oauth2.0/authorize?response_type=code&scope=get_user_info,add_share&client_id=" 
        . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
        . $_SESSION['state'];
     echo("<script> top.location.href='" . $dialog_url . "'</script>");
  }

  //Step2：通过Authorization Code获取Access Token
  if($_REQUEST['state'] == $_SESSION['state']) 
  {
     //拼接URL   
     $token_url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&"
     . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
     . "&client_secret=" . $app_secret . "&code=" . $code;
     $response = file_get_contents($token_url);
     if (strpos($response, "callback") !== false)
     {
        $lpos = strpos($response, "(");
        $rpos = strrpos($response, ")");
        $response  = substr($response, $lpos + 1, $rpos - $lpos -1);
        $msg = json_decode($response);
        if (isset($msg->error))
        {
           echo "<h3>error:</h3>" . $msg->error;
           echo "<h3>msg  :</h3>" . $msg->error_description;
           exit;
        }
     }

     //Step3：使用Access Token来获取用户的OpenID
     $params = array();
     parse_str($response, $params);
     $graph_url = "https://graph.qq.com/oauth2.0/me?access_token=".
     $params['access_token'];
     $str  = file_get_contents($graph_url);
     if (strpos($str, "callback") !== false)
     {
        $lpos = strpos($str, "(");
        $rpos = strrpos($str, ")");
        $str  = substr($str, $lpos + 1, $rpos - $lpos -1);
     }
     $user = json_decode($str);
     if (isset($user->error))
     {
        echo "<h3>error:</h3>" . $user->error;
        echo "<h3>msg  :</h3>" . $user->error_description;
        exit;
     }
    setcookie('openid',$user->openid,time()+3600*24*10);
	setcookie('takenid',$params['access_token'],time()+3600*24*10);
	
    $tu = "https://graph.qq.com/user/get_user_info?oauth_consumer_key=".$app_id."&access_token=".$params['access_token']."&openid=".$user->openid."&format=json";
    $u  = file_get_contents($tu);
    //print_r($u);
    
    $url = "test2.php"; 
    echo("<script> top.location.href='" . $url . "'</script>");
    
  }
  else 
  {
  echo("The state does not match. You may be a victim of CSRF.");
  }
?>