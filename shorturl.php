<?php

$long = "http://50r.cn/short_url.json?url=http://www.3linepoem.com";
$u  = file_get_contents($long);
$newu = json_decode($u);
$short = $newu[url];
print_r ($u);

?>