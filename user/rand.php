<?php
require("../conn.php");
$result = mysql_query("SELECT  id from  poem order by rand() limit 1");  
$number = mysql_fetch_array($result);
$number = $number[0];

echo "<script>location.href='view.php?id=".$number."'</script>";

?>