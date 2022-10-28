<?php
if(strstr($_SERVER['REMOTE_ADDR'],":"))
	$IP = "IPv6";
else
	$IP = "IPv4";
$hostname = htmlspecialchars(gethostbyaddr($_SERVER['REMOTE_ADDR']));
if(isset($_SERVER['HTTP_USER_AGENT']) != "" )
	$useragent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
else
	$useragent = "";
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Quelle est mon IPv4 / IPv6 ?</title>
      <meta name="description" content="Donne votre adresse IPv4, IPv6 et les infos associées" />
      <meta name="author" content="Vivien - https://lafibre.info" />
      <meta name="keywords" content="IPv4, IPv6, reverse DNS" />
    </head>
<body>
<a href="https://lafibre.info"><img src="lafibre.png" alt="LaFibre.info" /></a>
<br />
<h4>';
if ($_SERVER['HTTP_HOST'] == "ipv4v6.lafibre.info")
	echo 'Quelle est mon adresse IPv4 / IPv6 publique ?';
if ($_SERVER['HTTP_HOST'] == "ipv4.lafibre.info")
	echo 'Quelle est mon adresse IPv4 ? (ipv4.lafibre.info force l\'utilisation d\'IPv4)';
if ($_SERVER['HTTP_HOST'] == "ipv6.lafibre.info")
	echo 'Quelle est mon adresse IPv6 ? (ipv6.lafibre.info force l\'utilisation d\'IPv6)';
if ($_SERVER['HTTP_HOST'] == "ipv4v6-c.lafibre.info")
	echo 'Utilisation d\'un CNAME IPv4 + IPv6, alias de ip.lafibre.info';
if ($_SERVER['HTTP_HOST'] == "ipv4-c.lafibre.info")
	echo 'Utilisation d\'un CNAME IPv4, alias de ipv4.lafibre.info';
if ($_SERVER['HTTP_HOST'] == "ipv6-c.lafibre.info")
	echo 'Utilisation d\'un CNAME IPv6, alias de ipv6.lafibre.info';
if ($_SERVER['HTTP_HOST'] == "89.84.1.194")
	echo 'Utilisation de l\'IPv4 du serveur en direct, sans DNS';
if ($_SERVER['HTTP_HOST'] == "[2001:860:de01:1101::2]")
	echo 'Utilisation de l\'IPv6 du serveur en direct, sans DNS';
echo '</h4>
      <ul><li>Votre ',$IP,' publique est <strong><font color=';
if ("$IP" == "IPv6")
	echo 'green';
else
	echo 'red';
echo '>',$_SERVER['REMOTE_ADDR'],'</font></strong></li>';
if ("$IP" == "IPv4" AND $_SERVER['HTTP_HOST'] == "ip.lafibre.info")
	echo '
      <li>IPv6 n\'a pas été détecté. <small>(Si vous pensez avoir une connectivité IPv6, vous pouvez forcer l\'utilisation d\'IPv6 en cliquant sur: <a href="https://ipv6.lafibre.info" title="IPv6 publique">https://ipv6.lafibre.info</a> - la page ne se chargera pas, en cas d\'absence d\'IPv6)</small></li>';
	echo '
      <li>Votre reverse DNS ',$IP,' est <strong>',$hostname,'</strong></li>
      <li>Le port TCP source utilisé par votre connexion ',$IP,' est <strong><font color=';
if ($_SERVER['REMOTE_PORT'] < "32768")
	echo 'red';
else
	echo 'green';

echo '>',$_SERVER['REMOTE_PORT'],'</font></strong> <small>(<a href="https://lafibre.info/systeme-exploitation/local_port_range" title="Plage de ports dynamique du protocole TCP" target="_blank">Plus d\'informations</a>)</small></li>
      <li>La version du protocole IP utilisée pour charger cette page est <strong><font color=';

if ("$IP" == "IPv6")
        echo 'green';
else
        echo 'red';
echo '>',$IP,'</font></strong></li>';
echo '
      <li>Le port TCP destination utilisé est <strong>',$_SERVER['SERVER_PORT'],'</strong></li>
      <li>Votre connexion sur cette page est <strong>';
if (isset($_SERVER['HTTPS']) == "on")
	echo 'chiffrée avec https</strong></li>';
else
	echo 'en clair</strong></li>';
echo '
      <li>La version du protocole HTTP utilisée est <strong>',$_SERVER['SERVER_PROTOCOL'],'</strong></li>
      <li>Votre navigateur est <strong>',$useragent,'</strong></li></ul>
<br />
<h4>=> Retour sur <a href="https://ip.lafibre.info">https://ip.lafibre.info</a></h4>
</body>
</html>';
?>
