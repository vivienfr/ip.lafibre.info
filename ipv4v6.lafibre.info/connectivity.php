<?php
$hostname = htmlspecialchars(gethostbyaddr($_SERVER['REMOTE_ADDR']));
echo '{
    "literal-connectivity": "<span class=textevert>OK</span>",
    "literal-ip": " : IPv4 publique = ',$_SERVER['REMOTE_ADDR'],'",
    "literal-remote_port": " et ';
if ($_SERVER['REMOTE_PORT'] < "32768")
	echo '<span class=texterouge>TCP ';
else
	echo '<span class=textevert>TCP ';
echo $_SERVER['REMOTE_PORT'],'</span> (via IPv4 littérale)"
}';
?>
