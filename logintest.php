<?php

    if(isset($_POST["name"])){
      
      $name = $_POST["name"];
		$pass = $_POST["password"];
		$time=time();
		require("./conn.php");
		$insert_sql = "INSERT INTO email(name,email,time) VALUES";
		$insert_sql .= "('$name','$pass','$time')";
		if(mysql_query($insert_sql)){
		} else {
			echo '添加失败：',mysql_error(),'[ <a href="javascript:history.back()">返 回</a> ]';
		
		
    	}
        setcookie('id',$_POST["name"],time()+3600*24*10);
        setcookie('pass',$_POST["password"],time()+3600*24*10);
        echo "<script>location.href='http://3linepoem.sinaapp.com/logintest.php?name=".$_POST["name"]."'</script>";
		
		
    }
    if(isset($_COOKIE['id'])){
        echo "<script>location.href='http://www.3linepoem.com'</script>";
    }
?>

<form action="" method="post">
    用户：
    <input type="text" name="name" /><br /><br />
    密码：
    <input type="password" name="password" /><br /><br />
    <input type='submit' value="登陆" />
</form>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />