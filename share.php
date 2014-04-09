<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET["id"];
require("./conn.php");
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
$page= "http://www.3linepoem.com/picview/picview.php?ida=3".$id;
echo "<script>location.href='http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=".$page."&title='+encodeURIComponent('".$title."')+'&pics='+encodeURIComponent('".$url."')+'&summary='+encodeURIComponent('')+'&desc='+encodeURIComponent('".$line1."'),'_blank','scrollbars=no,width=600,height=560,left=175,top=70,status=no,resizable=yes'</script>";


echo "asd"
?>

