<?php
if(isset($_SERVER['HTTP_USER_AGENT']) != "" )
        $useragent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
else
        $useragent = "";
echo $useragent;
?>
