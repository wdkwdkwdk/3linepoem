    <?php
    include "../360safe/360webscan.php";
    ?>
<meta charset="utf-8">
<?php
include "check.php";
$id = $_POST['id'];
$content = $_POST['content'];


require("../conn.php");
$result = mysql_query("SELECT * FROM poem WHERE id = '$id'");
$poem = mysql_fetch_array($result);
$title = $poem[title];
$name = $poem[name];
if($title==NULL)
{
	 
	 echo "id:".$id;
	 //echo "<script>location.href='http://www.3linepoem.com'</script>";
	 exit;
}
$user = base64_decode($_COOKIE['user']);
if($name!=$user)
{
	
	echo "name:".$name;
	//echo "<script>location.href='http://www.3linepoem.com'</script>";
	exit;

}
//格式替换 
$time = time();
$content = str_replace(" ", "&nbsp;", $content);
$content = str_replace("\n","<br />",$content);
//写入数据库

require("../conn.php");
$result = mysql_query("SELECT * FROM story WHERE poem = '$id'");
$story = mysql_fetch_array($result);
$story = $story[story];
if($story!=NULL)
{
	$result = mysql_query("UPDATE  story SET story = '$content' WHERE poem = '$id'");
	echo "<script>location.href='view.php?id=".$id."'</script>";
}
else
{
include "conn.php";
	$insert_sql = "INSERT INTO story(story,time,poem) VALUES";
	$insert_sql .= "('$content','$time','$id')";
	if(mysql_query($insert_sql))
	{
		//echo $lar;
		setcookie("storyid","");
		echo "<script>location.href='view.php?id=".$id."'</script>";
	} 
	else 
	{
		setcookie("storyid","");
		echo '处理失败：',mysql_error(),'[ <a href="javascript:history.back()">返 回</a> ]';
		exit;
	}

}
?>