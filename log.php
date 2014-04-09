<?php
 /** * 用DES算法加密/解密字符串 * *
  @param string $string 待加密的字符串 
  @param string $key 密匙，和管理后台需保持一致
  @return string 返回经过加密/解密的字符串
*/
// 加密，注意，加密前需要把数组转换为json格式的字符串 
function des_encrypt($string, $key) {
    $size = mcrypt_get_block_size('des', 'ecb');
    $string = mb_convert_encoding($string, 'GBK', 'UTF-8');
    $pad = $size - (strlen($string) % $size);
    $string = $string . str_repeat(chr($pad), $pad);
    $td = mcrypt_module_open('des', '', 'ecb', '');
    $iv = @mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    @mcrypt_generic_init($td, $key, $iv);
    $data = mcrypt_generic($td, $string);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    $data = base64_encode($data);
    return $data;
}

// 解密，解密后返回的是json格式的字符串
function des_decrypt($string, $key) {
    $string = base64_decode($string);
    $td = mcrypt_module_open('des', '', 'ecb', '');
    $iv = @mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    $ks = mcrypt_enc_get_key_size($td);
    @mcrypt_generic_init($td, $key, $iv);
    $decrypted = mdecrypt_generic($td, $string);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    $pad = ord($decrypted{strlen($decrypted) - 1});
    if($pad > strlen($decrypted)) {
        return false;
    }
    if(strspn($decrypted, chr($pad), strlen($decrypted) - $pad) != $pad) {
        return false;
    }
    $result = substr($decrypted, 0, -1 * $pad);
    $result = mb_convert_encoding($result, 'UTF-8', 'GBK');
    return $result;
}
?>
<?php
include "check.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="登陆|三行诗">
    <meta name="author" content="">
<style type="text/css">
body,td,th,div {
  font-family: 微软雅黑;
}
</style>
    <title>三行诗</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.2/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <link href="css/s.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="index.php">主页</a></li>
          <li><a href="us.php">关于</a></li>
          <li><a href="reg.php">注册</a></li>
          <li class="active"><a href="log.php">登陆</a></li>
        </ul>
        <h3 class="text-muted">三行诗</h3>
      </div>

<?php
error_reporting(1);
function get_client_ip() { 
    if(getenv('HTTP_CLIENT_IP')){ 
        $client_ip = getenv('HTTP_CLIENT_IP'); 
    } elseif(getenv('HTTP_X_FORWARDED_FOR')) { 
        $client_ip = getenv('HTTP_X_FORWARDED_FOR'); 
    } elseif(getenv('REMOTE_ADDR')) {
        $client_ip = getenv('REMOTE_ADDR'); 
    } else {
        $client_ip = $_SERVER['REMOTE_ADDR'];
    } 
    return $client_ip; 
}   

$ip = get_client_ip();
$email = $_POST['email'];
$pass = md5($_POST['pass']);
include "conn.php";
$result = mysql_query("SELECT * FROM dearuser WHERE email = '$email' AND pass = '$pass'");
$use = mysql_fetch_array($result);
if($use!=NULL)
    {
      $id = $use[id];
      $user = $use[name];
      $result = mysql_query("UPDATE  dearuser SET lastip = '$ip' WHERE email = '$email'");
      
      $s = "thegreatdk";
      $add = $user.$id.$s;
      $session = md5($add);
      
     echo "2";
     
//comment box
  /*
$uid = $id;
$uname = $user;
$email = "";
$uface = "http://m3.img.libdd.com/farm4/d/2013/1207/23/3F0952A835177CE3007DA168B4C5FA01_B500_900_500_443.jpeg";
$ulink = "";
$expire = "3600";
$key = "wdkkdw"; //要注意，这里的密钥要改成您自己添加的密钥

$encode_data = array( 
'uid'=>$uid, 
'uname'=>$uname, 
'email'=>$email, 
'uface'=>$uface, 
'ulink'=>$ulink,
'expire'=>$expire
);
setcookie('syncuyan', des_encrypt(json_encode($encode_data), $key), time() + 3600, '/', 'www.3linepoem.com'); //要注意，这里的域名要改成您自己网站的域名

//end
*/

 $id = base64_encode($id);
      $username = $user;
      $user = base64_encode($user);

echo "asd";
      setcookie("user","$user", time()+36000);
      setcookie("id","$id", time()+36000);
      setcookie("session","$session", time()+36000);
      echo "<script>location.href='user/'</script>";


    }
else
{
if($email!=NULL)
{
echo "<center><span class=\"STYLE1\">邮箱或密码错误~ <a href=\"log.php\">记错了？</a></span></center>";
exit;
}
}
?>





<div class="container">

      <form class="form-signin" role="form" action="" method="post">
        <h2 class="form-signin-heading">登陆</h2>
        <input type="email" class="form-control" placeholder="电子邮件地址" name="email" required>
        <input type="password" class="form-control" placeholder="密码" name="pass" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">好了</button>
      </form>

    </div> <!-- /container -->
<?php
include "foot.php";
?>