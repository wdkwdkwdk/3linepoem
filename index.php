<?php 
$title = "三行诗";
include 'head.php'; 

require("./conn.php");
$result = mysql_query("SELECT  * from  dearuser order by time desc limit 1");
$poet = mysql_fetch_array($result);
$poet = $poet[id];


require("./conn.php");
        $result = mysql_query("SELECT  * from  poem order by id desc limit 1");
              while($poem = mysql_fetch_array($result))
    {  
?>
  <div class="jumbotron">
        <h1>三行诗</h1>
    <p class="lead"><span class="STYLE2"><?php echo $poet; ?></span>个诗人,创作了<span class="STYLE2"><?php echo $poem[id]; ?></span>首诗<br>简单，纯净，有爱的三行诗创作小站，不只是三行情书</p>
        <p><a class="btn btn-lg btn-success" href="reg.php" role="button">注册</a>  <a class="btn btn-lg btn-info" href="log.php" role="button">登录</a>  <a class="btn btn-lg btn-primary" href="user/rand.php" role="button">随便看看</a></p>
      </div>



<div id="container">

<div class="demo-wrapper">

    <div id="demo" style="padding-left:40%;">


<?php 
        
  
                    $url=$poem[url];
        
                    $title=$poem[title];
                    $page="http://www.3linepoem.com/user/view.php?id=".$poem[id];
                    echo "<div class=\"col\">";
                        echo "<div class=\"big todos-thumb\">";
                        echo "<p><a href=\"".$page."\"><img src=\"img/loader.gif\" data-src=\"$url\" alt=\"".$title."\"></a>";
                        echo "<span class=\"todos-thumb-span\">".$title."</span>";
                        echo "</p>";
                        echo "</div>";
                        echo "</div>";
    }
?>

       
<?
require("./conn.php");
        $result = mysql_query("SELECT  * from  poem order by rand() desc limit 20");  
        $c = 1;
        while($poem = mysql_fetch_array($result))
    {
        
                    $url=$poem[url];
                    $url=$poem[url];
                    $name=$poem[name];
                    $title=$poem[title];
       
                    $time=$poem[time];
                    $time=date("Y-m-d H:i", $time);
                    $page="http://www.3linepoem.com/user/view.php?id=".$poem[id];
                    if($c<10)
                    {

                        echo "<div class=\"col col".$c."\">";
                        echo "<div class=\"big todos-thumb\">";
                        echo "<p><a href=\"".$page."\"><img src=\"img/loader.gif\" data-src=\"$url\" alt=\"".$title."\"></a>";
                        echo "<span class=\"todos-thumb-span\">".$title."</span>";
                        echo "</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    else
                    {
                        $b = $c - 9;
                        echo "<div class=\"col line col".$b."\">";
                        echo "<div class=\"big todos-thumb\">";
                        echo "<p><a href=\"".$page."\"><img src=\"img/loader.gif\" data-src=\"$url\" alt=\"".$title."\"></a>";
                        echo "<span class=\"todos-thumb-span\">".$title."</span>";
                        echo "</p>";
                        echo "</div>";
                        echo "</div>";
                    }
          
                    $c++;
        
    }
?>

<!-- line2 -->
    </div>

</div><!--! end of #demo --> 
<br><center><p><a href="us.php">改版说明(老用户请看)</a></center>
</div> <!--! end of #container -->
      <?php include 'foot.php'; ?>