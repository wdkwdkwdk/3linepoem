<?php
$title = "写故事|三行诗";
include "check.php";
include "head.php";
$id = $_GET['id'];
require("../conn.php");
$result = mysql_query("SELECT * FROM poem WHERE id = '$id'");
$poem = mysql_fetch_array($result);
$title = $poem[title];
$name = $poem[name];
if($title==NULL)
{
	 
	 echo "<script>location.href='http://www.3linepoem.com'</script>";
	 exit;
}
$user = base64_decode($_COOKIE['user']);
if($name!=$user)
{
	
	echo '你不是这首诗的作者，不能添加故事：',mysql_error(),'[ <a href="javascript:history.back()">返 回</a> ]';
	//echo "<script>location.href='http://www.3linepoem.com'</script>";
	exit;

}


require("../conn.php");
$result = mysql_query("SELECT * FROM story WHERE poem = '$id'");
$story = mysql_fetch_array($result);
$story = $story[story];

$story = str_replace("&nbsp;", " ", $story);
$story = str_replace("<br />","\n",$story);

?>
<p>我们相信，每首诗歌背后都有自己的故事，尝试写下关于『<?php echo $title; ?>』的故事:</p>
<form role="form" method="post" action="send.php">
<textarea id="b" class="mll" name="content" style="height: 200px; width: 100%;"><?php echo $story; ?></textarea>
 <p><input type="hidden" name="id" value="<?php echo $_GET["id"]?>"></p>
<button type='submit' class='btn btn-default'>好了</button>
</form>




<?php
include "foot.php";
?>