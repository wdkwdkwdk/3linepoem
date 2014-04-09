<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $title; ?>|三行诗,三行情书">
    <meta name="keywords" content="三行情书,三行诗,诗歌,文艺,<?php echo $title; ?>" />
    <meta name="author" content="">



    <title><?php echo $title; ?>|三行诗,三行情书</title>



    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   <style type="text/css">
   .mll {
  border-radius: 3px;
  padding: 5px;
  font-size: 14px;
  border: 1px solid #ccc;
  display: block;
  width: 650px;
  height: 8em;
  box-shadow: 0pt 1px 2px rgba(0, 0, 0, 0.18) inset;
    overflow-y: auto;
  
}

.mll:focus {
  border: 1px solid rgba(128, 128, 160, 0.6);
  box-shadow: 0pt 1px 2px rgba(0, 0, 0, 0.18) inset, 0px 0px 5px rgba(128, 128, 160, 0.5);
    outline: none;
}
   body {
  background-image: url(bg.gif);
  padding-left:10%;
  padding-right:10%;
  
  
}
.STYLE1 {
  font-family: "微软雅黑";
  font-size: 36px;
  color: #666666;
}
.STYLE2 {
  font-size: 14px;
  color: #CCCCCC;
  font-family: "微软雅黑";
  
}
.STYLE4 {font-size: 36px; font-family: "微软雅黑";}
.STYLE5 {
  font-size: 14px;
  color: #000000;
}
.STYLE7 {font-family: "微软雅黑"}
-->
   body {
  
    padding-top: 70px;
}
body,td,th {
  font-family: 微软雅黑;
  
}

</style>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
  </head>
  

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">三行诗</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            

         <li class="active"><a href="#">我的</a></li>
            

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">写<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../write.php">写三行诗</a></li>
                <li><a href="#">写其它诗(暂未开放)</a></li>
              </ul>
            </li>
            
 <li><a href="../picview/all.php" target="_blank">浏览三行诗</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">官方 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="us.php#use">使用须知</a></li>
                <li><a href="us.php#more">关于我们</a></li>
                <li><a href="us.php#about">更多</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo base64_decode($_COOKIE['user']); ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="setting.php">个人中心</a></li>
                <li><a href="out.php">登出</a></li>
              </ul>
            </li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <?php
    include "../360safe/360webscan.php";
    ?>