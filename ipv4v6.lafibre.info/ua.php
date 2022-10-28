<?php
header('Content-Type: text/plain');

$useragent = "";
if (isset($_SERVER['HTTP_USER_AGENT']) && ! empty($_SERVER['HTTP_USER_AGENT'])) {
        $useragent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
}

echo $useragent;
