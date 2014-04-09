<?php


$title = "我|三行诗";
include "head.php";
include "check.php";
?>


    <div class="container">
<div class="page-header">
  <h1>我创作的<small>三行诗</small></h1>
</div>


      <!-- Main component for a primary marketing message or call to action -->
      <?php
      $name = base64_decode($_COOKIE['user']);
require("./conn.php");
$result = mysql_query("SELECT * FROM poem WHERE name = '$name' ORDER BY id DESC ");
$c = 1;
while($poem = mysql_fetch_array($result))
{
          
          //echo "<center><div style=\"margin:0;padding:0; width:580px;height:1px;background-color:#303030;overflow:hidden;\"></div></center>"


          $url=$poem[url];
          $title=$poem[title];
          $page="view.php?id=".$poem[id];
          $time=$poem[time];
              $time=date("Y-m-d H:i", $time);
          
          echo $c.".<a href=\"".$page."\" target=\"_blank\"><h2>《".$title."》</h2></a> ".$time."</span></center>";
          echo "<hr>";
          $c++;
}
if($c<2)
{
  echo "<div class=\"alert alert-info\">你还没有写过一首诗哟，你可以现在就<a href=\"../write.php\">写</a>，或者先<a href=\"../picview/all.php\">看看别人</a>的</div>";
}

 ?>
      

    </div> <!-- /container -->
<br><br><br><br>
<?php
include "foot.php";
?>