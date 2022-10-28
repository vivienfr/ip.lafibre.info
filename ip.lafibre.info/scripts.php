<?php
include("include/en-tete1-fr.php");
echo '	<title>Scripts qui indiquent si l\'IP est une IPv4 ou une IPv6</title>
	<meta name="description" content="Donne votre adresse IPv4, IPv6 et les infos associées" />
	<meta name="keywords" content="IPv4, IPv6, reverse DNS" />';
include("include/en-tete2-fr.php");
include("include/menu-fr.php");

echo '<h2>Scripts qui indiquent si l\'IP est une IPv4 ou une IPv6</h2>

<strong>Si vous souhaitez récupérer :</strong><br />
- votre <strong><span class="texterouge">IPv4</span></strong> publique par script, vous pouvez utiliser la page <a href="https://ipv4.lafibre.info/ip.php" title="IPv4 publique" target="_blank">http<strong>s</strong>://ipv4.lafibre.info/ip.php</a> (https) ou <a href="http://ipv4.lafibre.info/ip.php" title="IPv4 publique" target="_blank">http://ipv4.lafibre.info/ip.php</a> (http)<br />
- votre <strong><span class="textevert">IPv6</span></strong> publique par script, vous pouvez utiliser la page <a href="https://ipv6.lafibre.info/ip.php" title="IPv6 publique" target="_blank">http<strong>s</strong>://ipv6.lafibre.info/ip.php</a> (https) ou <a href="http://ipv6.lafibre.info/ip.php" title="IPv6 publique" target="_blank">http://ipv6.lafibre.info/ip.php</a> (http)<br />
- votre <strong><span class="texterouge">IPv4</span> ou <span class="textevert">IPv6</span></strong> (en fonction du client) par script, vous pouvez utiliser la page <a href="https://ipv4v6.lafibre.info/ip.php" title="IPv4 IPv6 publique" target="_blank">http<strong>s</strong>://ipv4v6.lafibre.info/ip.php</a> (https) ou <a href="http://ipv4v6.lafibre.info/ip.php" title="IPv4 IPv6 publique" target="_blank">http://ipv4v6.lafibre.info/ip.php</a> (http)<br />
- votre <strong><span class="texterouge">IPv4</span> et <span class="textevert">IPv6</span></strong> par script, vous pouvez utiliser la page <a href="https://ip.lafibre.info/ip.php" title="IPv4 IPv6 publique" target="_blank">http<strong>s</strong>://ip.lafibre.info/ip.php</a> (https) ou <a href="http://ip.lafibre.info/ip.php" title="IPv4 IPv6 publique" target="_blank">http://ip.lafibre.info/ip.php</a> (http)<br />
<br /><br />
<strong>Scripts qui récupérent l\'IP publique, et qui indiquent si c\'est une IPv4 ou une IPv6 :</strong>
      <ul><li>Script python3 : <a href="scripts/ip.py" title="Script perl IP publique">ip.py</a></li>
      <li>Script perl : <a href="scripts/ip.pl" title="Script perl IP publique">ip.pl</a></li>
      <li>Script shell - bash : <a href="scripts/ip.sh" title="Script perl IP publique">ip.sh</a></li>
      <li>Script php : <a href="scripts/ip.php" title="Script PHP IP publique">ip.php</a> <small>(ne pas ouvrir: Clic droit, puis "Enregistrer la cible du lien sous...")</small></li>
      <li>Script php JSON : <a href="scripts/ip-json.php" title="Script PHP format JSON">ip-json.php</a> <small>(ne pas ouvrir: Clic droit, puis "Enregistrer la cible du lien sous...")</small></li>
      </ul>';

include("include/foot-fr.php");
?>
