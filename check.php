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
	echo "<script>location.href='user/'</script>";
}
else
{


}

?>