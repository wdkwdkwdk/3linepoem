<meta charset="utf-8">
<?php
error_reporting(1);
$user = base64_decode($_COOKIE['user']);
$id = base64_decode($_COOKIE['id']);
$session = $_COOKIE['session'];
$s = "thegreatdk";
$add = $user.$id.$s;

$check = md5($add);
if($check==$session)
{
	
}
else
{
	echo "key过期，请<a href=\"../log.php\">点此</a>重新登陆";
	exit;
}
if($session==NULL)
{
	echo "key过期，请<a href=\"../log.php\">点此</a>重新登陆";
	exit;
}
?>