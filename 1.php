<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
  <HEAD>
     <TITLE> New Document </TITLE>
     <META NAME="Generator" CONTENT="EditPlus">
     <META NAME="Author" CONTENT="">
     <META NAME="Keywords" CONTENT="">
     <META NAME="Description" CONTENT="">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></HEAD>
  <BODY>
     <form action="https://graph.qq.com/share/add_share" method="post">
	 
	 
	 <input type="hidden" name="title" value="<?php echo $_GET["title"]?>">
	  <input type="hidden" name="site" value="<?php echo $_GET["site"]?>">
	 <input type="hidden" name="fromurl" value="<?php echo $_GET["fromurl"]?>">
       <input type="hidden" name="access_token" value="<?php echo $_GET["access_token"]?>">
	    <input type="hidden" name="oauth_consumer_key" value="<?php echo $_GET["oauth_consumer_key"]?>">
		<input type="hidden" name="openid" value="<?php echo $_GET["openid"]?>">
		<input type="hidden" name="comment" value="<?php echo $_GET["comment"]?>">
		<input type="hidden" name="summary" value="<?php echo $_GET["summary"]?>">
		<input type="hidden" name="images" value="<?php echo $_GET["images"]?>">
	

        <input type="submit" value="分享" />
     </form>
  </BODY>
</HTML>