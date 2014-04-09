<?php
setcookie("id", "");
setcookie("session", "");
setcookie("user", "");
setcookie('syncuyan', 'logout', time() + 3600, '/', 'www.3linepoem.com');
echo "<script>location.href='index.php'</script>";
exit;
?>