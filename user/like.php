<?php


$title = "我|三行诗";
include "head.php";
include "check.php";
?>



    <div class="container">
<div class="page-header">
  <h1>我收藏的<small>三行诗</small></h1>
</div>


      <!-- Main component for a primary marketing message or call to action -->
      <?php
      $name = base64_decode($_COOKIE['user']);
require("./conn.php");
$results = mysql_query("SELECT * FROM poemlike WHERE user = '$name' ORDER BY time DESC");
$c = 1;
while($poemlike = mysql_fetch_array($results))
{
          
          //echo "<center><div style=\"margin:0;padding:0; width:580px;height:1px;background-color:#303030;overflow:hidden;\"></div></center>"
          $id = $poemlike['id'];
          require("./conn.php");
          $result = mysql_query("SELECT * FROM poem WHERE id = '$id'");
          while($poem = mysql_fetch_array($result))
          {

          

          $url=$poem[url];
          $title=$poem[title];
          $page="view.php?id=".$poem[id];
          $time=$poem[time];
              $time=date("Y-m-d H:i", $time);
          
          echo $c.".<a href=\"".$page."\" target=\"_blank\"><h2>《".$title."》</h2> </a></center>";
          echo "<hr>";
        
             $c++;
        }
       
}
if($c<=1)
{
  echo "<div class=\"alert alert-info\">你还没有搜藏喜欢的三行诗呢！先<a href=\"../picview/all.php\">看看别人</a>的吧</div>";
}

 ?>
      

    </div> <!-- /container -->
<br><br><br><br>
<?php
include "foot.php";
?>