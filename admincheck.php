<style type="text/css">
<!--
body {
	background-color: #000000;
}
.STYLE1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 24px;
	color: #00FF00;
}
-->
</style>
<?php 
$pass=$_POST["pass"];
if($pass!="wdkisbest")
{
	echo "<div align=\"center\"><span class=\"STYLE1\">Password Error£¡</span></div>";
	sleep(5);
	echo "<script>location.href='http://www.3linepoem.com'</script>";
}
else
{
	setcookie('pass',$_POST["pass"],time()+36000);  
	echo "<script>location.href='picview/adminok.php'</script>";  
}
?>

<title>µÇÂ½¼ì²é|ÈýÐÐÊ«</title>